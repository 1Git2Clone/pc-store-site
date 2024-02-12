<?php
$LANGUAGE = "en";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="../style/style-main.php">
    <link rel="stylesheet" type="text/css" href="../style/style-map.php">
    <!--External font-->
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "../Templates/header.php" ?>

    <?php include "../Templates/navbar.php" ?>

    <div class="mainContent">
        <h1>About us</h1>
        <p>Lorem ipsUm dolor sit amet consectetur, adipisicing elit. Ipsa consectetur optio repellendus ducimus distinctio corporis fugiat consequuntur illum nam! Omnis quis eveniet nam repellendus illum tempore dolore culpa magnam perferendis?</p>
        <p>Lorem ipsUm dolor sit amet consectetur, adipisicing elit. Ipsa consectetur optio repellendus ducimus distinctio corporis fugiat consequuntur illum nam! Omnis quis eveniet nam repellendus illum tempore dolore culpa magnam perferendis?</p>
        <p>Lorem ipsUm dolor sit amet consectetur, adipisicing elit. Ipsa consectetur optio repellendus ducimus distinctio corporis fugiat consequuntur illum nam! Omnis quis eveniet nam repellendus illum tempore dolore culpa magnam perferendis?</p>
        <p>Lorem ipsUm dolor sit amet consectetur, adipisicing elit. Ipsa consectetur optio repellendus ducimus distinctio corporis fugiat consequuntur illum nam! Omnis quis eveniet nam repellendus illum tempore dolore culpa magnam perferendis?</p>
        <p>Lorem ipsUm dolor sit amet consectetur, adipisicing elit. Ipsa consectetur optio repellendus ducimus distinctio corporis fugiat consequuntur illum nam! Omnis quis eveniet nam repellendus illum tempore dolore culpa magnam perferendis?</p>

        <div class="mapContainer">
            <!-- GeneratEd with: https://embedmap.org/ -->
            <iframe
                width="250"
                height="250"
                frameborder="0"
                scrolling="no" 
                marginheight="0"
                marginwidth="0"
                id="gmap_canvas"
                src="https://maps.google.com/maps?width=250&amp;height=250&amp;hl=en&amp;q=%22Akademik%20Boris%20Stefanov%22%2035%20Sofia+(Ozone)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe>
            <a href='https://www.krankenversicherungsvergleich.at/'>.</a>
            <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=dc8757f1c046d9350427c71c566e5c740fa43957'></script>
        </div>
    </div>


    <?php include "../Templates/footer.php" ?>

</body>
</html>
