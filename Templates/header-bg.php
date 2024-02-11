<?php
$curr_file = basename($_SERVER['SCRIPT_FILENAME']);
echo
"
    <div style='display: flow-root;'>
      <div style='float: left; font-size: 2.5rem; margin: 1vw 0vw 0vw 2vw;'>
          <img src='../images/logo.png' alt='logo.png' style='width: 2.5em'>
      </div>
      <div style='float: right; font-size: 1.5rem; margin: 2.5rem 2vw 0vw 0vw;'>
          <a href='../en/$curr_file'>BG/EN</a>
      </div>
    </div>
    <header>
    <h1>Terabyte Inc.™</h1>
    </header>
    <br>
";
?>
