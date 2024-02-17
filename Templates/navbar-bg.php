<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "<h3>Потребител: $username (<a href='./logout.php' style='font-size: 1.1rem;'>Изход</a>)</h3>
        <nav>
        <a href='./index.php'>Главна страница</a>
        <a href='./store.php'>Магазин</a>
        <a href='./shopping-cart.php'><img src='../images/cart.png' alt='Артикули'></a>
    </nav>";
} else {
    echo '<nav>
        <a href="./index.php">Главна страница</a>
        <a href="./store.php">Магазин</a>
        <a href="./register.php">Регистрация</a>
        <a href="./login.php">Влизане</a>
        <a href="./shopping-cart.php"><img src="../images/cart.png" alt="Артикули"></a>
    </nav>';
}
?>
