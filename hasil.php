<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hasil</title>

    <link rel="stylesheet" href="./css/hasil.css" />

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Header -->
    <div class="text-center d-block text-light bg-dark fw-bold fs-4 py-3 px-3">
      Hasil Nilai Anda
    </div>

    <div class="text-center text-light d-block mt-4 pt-3 px-3 fs-6">
      <p>Anda memasukkan Angka</p>
      <p id="angka" class="fs-1 d-block fw-bold">
        <?php 
        if (!isset($_GET['angka'])) echo "Hanya bisa diakses melalui file html";
        else echo $_GET["angka"]; ?>
      </p>
      <p><?php 
      if (!isset($_GET['hasil'])) echo "-";
      else echo $_GET["hasil"]; ?></p>
    </div>
  </body>
</html>
