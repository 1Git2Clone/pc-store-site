
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="../style/style-main.css">
    <link rel="stylesheet" type="text/css" href="../style/style-map.css">
    <!--External font-->
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "../Templates/header.php" ?>

    <?php include "../Templates/navbar.php" ?>

    <div class="mainContent">
    <?php
    session_start(); // Start the session

    // Check if a session is active
    if(isset($_SESSION['username'])) {

        // Unset all session variables
        session_unset();
        // Destroy the session
        session_destroy();

        // Redirect to a login page or another page after logout
        header("Location: login.php");
        exit(); // Stop script execution
    } else {
        // If no session is active, redirect to a login page or another page
        header("Location: login.php");
        exit(); // Stop script execution
    }
    ?>
    </div>

    <?php include "../Templates/footer.php" ?>

</body>
</html>
