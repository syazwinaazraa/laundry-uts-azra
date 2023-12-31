<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Laundry</title>
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img style="width:120px"src="layouts/assets/image/image.png" class="brand">
                  <div class="user"><strong>LAUNDRY AZRA</strong></div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=pakaian_tampil">
                                    <img class="icon" src="layouts/assets/img/" alt=""> Pakaian
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=pelanggan_tampil">
                                    <img class="icon" src="layouts/assets/img/" alt=""> Pelanggan
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=transaksi_tampil">
                                    <img class="icon" src="layouts/assets/img/" alt=""> Transaksi
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Azra Diro Syazwina
            </footer>
      </main>

</body>

</html>