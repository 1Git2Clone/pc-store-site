<?php
    switch($LANGUAGE) {
    case "en":
        echo '<nav>
            <a href="./index.php">Homepage</a>
            <a href="./store.php">Store</a>
            <a href="./register.php">Register</a>
            <a href="./login.php">Login</a>
            <a href="./shopping-cart.php"><img src="../images/cart.png" alt="Cart"></a>
        </nav>';
        break;
    case "bg":
        echo '<nav>
            <a href="./index.php">Главна страница</a>
            <a href="./store.php">Магазин</a>
            <a href="./register.php">Регистрация</a>
            <a href="./login.php">Влизане</a>
            <a href="./shopping-cart.php"><img src="../images/cart.png" alt="Артикули"></a>
        </nav>';
        break;
    default:
        break;
    }
?>
