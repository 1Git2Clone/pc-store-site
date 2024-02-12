<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин</title>
    <link rel="stylesheet" href="../style/style-main.php">
    <link rel="stylesheet" href="../style/style-store.php">
    <!--External font-->
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&display=swap" rel="stylesheet">
</head>
<body>

    <?php include "../Templates/header-bg.php"?>

    <?php include "../Templates/navbar-bg.php"?>

    <div class="mainContent">
        <h1>Магазин</h1>
        <h3>Процесори</h3>
            <div class="storeRow">
                <div class="storeItem">
                    <img src="../images/CPUs/ryzen-3600.png">
                    <h4>Ryzen 5 3600</h4>
                    <p class="itemDescription">
                        <li>6-ядрен (12 нишки)</li>
                        <li>AM4 сокет</li>
                        <li>4.2GHz</li>
                    </p>
                </div>
                <div class="storeItem">
                    <img src="../images/CPUs/ryzen-5600.png">
                    <h4>Ryzen 5 5600</h4>
                    <p class="itemDescription">
                        <li>6-ядрен (12 нишки)</li>
                        <li>AM4 сокет</li>
                        <li>4.4GHz</li>
                    </p>
                </div>
                <div class="storeItem">
                    <img src="../images/CPUs/i7-10700k.png">
                    <h4>Intel Core i7-10700K</h4>
                    <p class="itemDescription">
                        <li>8-ядрен (16 нишки)</li>
                        <li>LGA1200 сокет</li>
                        <li>3.8GHz (5.1GHz Turbo)</li>
                    </p>
                </div>
                <div class="storeItem">
                    <img src="../images/CPUs/ryzen-5800x.png">
                    <h4>Ryzen 7 5800X</h4>
                    <p class="itemDescription">
                        <li>8-ядрен (16 нишки)</li>
                        <li>AM4 сокет</li>
                        <li>4.7GHz</li>
                    </p>
              </div>
              <!-- Add two more CPUs here -->
          </div>

          <h3>Видео карти</h3>
          <div class="storeRow">
              <div class="storeItem">
                  <img src="../images/GPUs/msi-gaming-gtx-1660.png">
                  <h4>MSI GAMING NVIDIA GeForce GTX 1660</h4>
                  <p class="itemDescription">
                      <li>6GB GDDR5</li>
                      <li>192-bit паметен интерфейс</li>
                      <li>Base Clock: 1530MHz</li>
                      <li>Boost Clock: 1830MHz</li>
                  </p>
              </div>
              <div class="storeItem">
                  <img src="../images/GPUs/gigabyte-eagle-rtx-3070.png">
                  <h4>GIGABYTE EAGLE NVIDIA GeForce RTX 3070</h4>
                  <p class="itemDescription">
                      <li>8GB GDDR6</li>
                      <li>256-bit паметен интерфейс</li>
                      <li>Base Clock: 1500MHz</li>
                      <li>Base Clock: 1735MHz</li>
                  </p>
              </div>
              <div class="storeItem">
                  <img src="../images/GPUs/founders-rtx-3080.png">
                  <h4>NVIDIA GeForce RTX 3080 FOUNDERS EDITION</h4>
                  <p class="itemDescription">
                      <li>10GB GDDR6X</li>
                      <li>320-bit паметен интерфейс</li>
                      <li>Base Clock: 1440MHz</li>
                      <li>Boost Clock: 1710MHz</li>
                  </p>
              </div>
              <div class="storeItem">
                  <img src="../images/GPUs/founders-rx-6800.png">
                  <h4>AMD Radeon RX 6800 FOUNDERS EDITION</h4>
                  <p class="itemDescription">
                      <li>16GB GDDR6</li>
                      <li>256-bit паметен интерфейс</li>
                      <li>Base Clock: 1815MHz</li>
                  </p>
              </div>
              <!-- Add four more GPUs here -->

          </div>

          <h3>RAM памет</h3>
          <div class="storeRow">
              <div class="storeItem">
                  <img src="../images/RAM/corsair-vengeance.png">
                  <h4>Corsair Vengeance LPX 16GB</h4>
                  <p class="itemDescription">
                      <li>DDR4 3200MHz</li>
                      <li>CAS Латентност: 16</li>
                  </p>
              </div>
              <div class="storeItem">
                  <img src="../images/RAM/g-skill-ripjaws.png">
                  <h4>G.Skill Ripjaws V 32GB (2x16GB)</h4>
                  <p class="itemDescription">
                      <li>DDR4 3600MHz</li>
                      <li>CAS Латентност: 18</li>
                  </p>
              </div>
              <div class="storeItem">
                  <img src="../images/RAM/corsair-vengeance-pro.png">
                  <h4>Corsair Vengeance RGB Pro 32GB (2x16GB)</h4>
                  <p class="itemDescription">
                      <li>DDR4 3600MHz</li>
                      <li>CAS Латентност: 18</li>
                  </p>
              </div>
              <div class="storeItem">
                  <img src="../images/RAM/hyperx-fury.png">
                  <h4>HyperX Fury 16GB (2x8GB)</h4>
                  <p class="itemDescription">
                      <li>DDR4 3200MHz</li>
                      <li>CAS Латентност: 16</li>
                  </p>
              </div>
              <!-- Add four more RAM stick models here -->

          </div>

          <h3>SSD дискове</h3>
          <div class="storeRow">
              <div class="storeItem">
                  <img src="../images/SSDs/samsung-970-evo.png">
                  <h4>Samsung 970 EVO 2TB NVMe SSD</h4>
                  <p class="itemDescription">
                      <li>Read Speed: 3500MB/s</li>
                      <li>Write Speed: 2500MB/s</li>
                      <li>M.2 Form Factor</li>
                  </p>
              </div>
              <div class="storeItem">
                  <img src="../images/SSDs/samsung-970-pro.png">
                  <h4>Samsung 970 PRO 512GB NVMe SSD</h4>
                  <p class="itemDescription">
                      <li>Read Speed: 3500MB/s</li>
                      <li>Write Speed: 2700MB/s</li>
                      <li>M.2 Form Factor</li>
                  </p>
              </div>
          </div>
          <h3>Твърди дискове</h3>
          <div class="storeRow">
              <div class="storeItem">
                  <img src="../images/HDDs/wd-blue-hdd-2tb.png">
                  <h4>WD Blue 2TB HDD</h4>
                  <p class="itemDescription">
                      <li>7200 RPM</li>
                      <li>64MB кеш памет</li>
                      <li>3.5" Размер</li>
                  </p>
              </div>
              <div class="storeItem">
                  <img src="../images/HDDs/seagate-barracuda-hdd-4tb.png">
                  <h4>Seagate Barracuda 4TB HDD</h4>
                  <p class="itemDescription">
                      <li>5400 RPM</li>
                      <li>256MB кеш памет</li>
                      <li>3.5" Размер</li>
                  </p>
              </div>
              <!-- Add one more HDD and one more SSD here -->

          </div>

    </div>

    <?php include "../Templates/footer-bg.php" ?>

    </body>
</html>
