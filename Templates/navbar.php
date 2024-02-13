<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  echo "<h3>User: $username (<a href='./logout.php' style='font-size: 1.1rem;'>Log out</a>)</h3>
    <nav>
        <a href='./index.php'>Homepage</a>
        <a href='./store.php'>Store</a>
        <a href='./shopping-cart.php'><img src='../images/cart.png' alt='Cart'></a>
    </nav>";
} else {

    echo '<nav>
        <a href="./index.php">Homepage</a>
        <a href="./store.php">Store</a>
        <a href="./register.php">Register</a>
        <a href="./login.php">Login</a>
        <a href="./shopping-cart.php"><img src="../images/cart.png" alt="Cart"></a>
    </nav>';
}
?>
