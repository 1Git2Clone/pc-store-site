<?php
$curr_file = basename($_SERVER['SCRIPT_FILENAME']);
echo 
"
    <header>
        <div class='left'>
            <img src='../images/logo.png' alt='logo.png' style='width: 3.5em'>
        </div>
        <div class='center'>
            <h1>Terabyte Inc.™</h1>
        </div>
        <div class='right'>
            <a href='../en/$curr_file'>BG/EN</a>
        </div>
    </header>
";
?>
