<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


# $php-variable = 'something';

/* <?=$php-variable?> */
?>
/* the store items */
.mainContent {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    justify-content: center;
    justify-items: center;

    h3 {
        text-align: center;
    }

}

.storeItem {
    max-width: 250px;
    height: auto;
}
