<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");

/* https://www.freecodecamp.org/news/how-to-keep-your-footer-where-it-belongs-59c6aa05c59c/ */

$footer_height = "250px";
$footer_padding = "0.3rem";
$border_width = "2px";
$body_margin = "8px";
# $php-variable = 'something';

/* <?=$php-variable?> */
?>

body {
    background-color: rgb(46, 46, 46);
    color: rgb(245, 245, 245);
    font-family: 'JetBrains Mono', monospace; /* Google fonts */

    border: <?=$border_width ?> solid white;
    position: relative;
    margin: <?=$body_margin ?>;
    min-height: 100vh;
}

header {
    background-color: rgb(20, 20, 20);
    display: flex;
    align-items: center;
    justify-content: space-around;
    text-align: center;
}
header h1 {
    margin: 0vh;
}


a {
    font-size: 2rem;
    color:rgb(245, 245, 245);
}
a:visited {
    color:rgb(245, 245, 245);
}

nav {
    background-color: rgb(36, 36, 36);
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    justify-content: center;
    justify-items: center;
    align-items: center;
}
nav a {
    text-align: center;
    max-width: 250px;
}
nav img {
    max-width: 3rem;
}

.navbarSpacing {
    font-size: 1rem;
}

.mainContent {
    padding-bottom: <?=$footer_height ?>;
}

h1, h2, h3 {
  text-align: center;
}
.mainContent h3 {
    background-color: rgb(20, 20, 20);
}

p {
  text-align: justified;
}


footer {

    height: <?=$footer_height ?>;
    position: absolute;
    bottom: 0;
    padding: <?=$footer_padding ?>;
    width: calc(100% - <?=$border_width ?> - <?=$footer_padding ?> * 2);

    display: grid;
    align-items: center;
    justify-content: center;
    background-color: rgb(20, 20, 20);
}
footer a {
    padding: 0.5rem;
}
footer img {
    max-width: 3rem;
}
.footerElement {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    /* justify-content: center; */
}
.footerElement h3, .footerElement p {
    margin: 0.4rem 0px;
}
