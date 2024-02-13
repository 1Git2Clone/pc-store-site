<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$curr_file = basename($_SERVER['SCRIPT_FILENAME']);
$lang_dir = basename(dirname($_SERVER['SCRIPT_FILENAME']));

$conn_failed;
$incorrect_login;
$successful_login;

$already_logged_in;

switch ($lang_dir) {
    case "en":
        $conn_failed = "Connection failed: ";
        $incorrect_login = "Incorrect username or password.";
        $successful_login = "Successful login!";
        $already_logged_in = "Already logged in as: ";
        break;
    case "bg":
        $conn_failed = "Неуспешна връзка с базата от данни: ";
        $incorrect_login = "Грешно потребителско име или парола.";
        $successful_login = "Успешен вход!";
        $already_logged_in = "Вече сте влезнали като потребител: ";
        break;
    default:
        # code...
        break;
}

if(isset($_SESSION['username'])) {
    echo "$already_logged_in <u>" . $_SESSION['username'] . "</u>";
    return; // save resources bwuh.
}

$servername = "localhost";
$username = "root";
$password = "ligma";
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("$conn_failed" . $conn->connect_error);
}

$conn->select_db("pc_store");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkUserQuery = "SELECT * FROM users WHERE name = ?";
    $stmt = $conn->prepare($checkUserQuery);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, check password
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];

        // "password_verify hashes it with argon2 for you." - Chat Gippidy
        if (password_verify($password, $stored_password)) {
            // Password is correct, login successful
            if(!isset($_SESSION['username'])) {
                $_SESSION['username'] = $username;
                echo "$successful_login";
                if(session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                sleep(1);
                header("Location: index.php");
            }
        } else {
            // Incorrect password
            echo "$incorrect_login";
        }
    } else {
        // User not found
        echo "$incorrect_login";
    }

    // Close connection
    $conn->close();
}
?>
