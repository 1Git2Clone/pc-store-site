<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


# $php-variable = 'something';

/* <?=$php-variable?> */
?>
body {
    background-color: rgb(46, 46, 46);
    color: rgb(245, 245, 245);
    font-family: 'JetBrains Mono', monospace; /* Google fonts */

    border: 2px solid white;
}

header {
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
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    justify-content: center;
    justify-items: center;

}
nav a {
    text-align: center;
    max-width: 250px;
}
nav img {
    padding-right: 1vw;
    width: 4rem;
}

.navbarSpacing {
    font-size: 1rem;
}

h2, h3 {
  text-align: center;
}

p {
  text-align: justified;
}
