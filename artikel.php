<?php
    include "koneksi.php";

    $id = $_GET["id"];

    $qartikel = "SELECT * from artikel, jenis_tanaman where artikel.id_tanaman = jenis_tanaman.id_tanaman and jenis_tanaman.id_tanaman = $id";
    $data_artikel = $conn->query($qartikel)->fetch_assoc();

   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-artikel.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/fav-icn.svg" type="image/x-icon">
    <title>Artikel</title>
</head>

<body>
    <div class="jumbotron text-center bg" style="background-color: #3498DB;">
        <div class="container isijumbotron">
            
            <h1 class="jumbotron-heading"><i><?= $data_artikel["nama"] ?></i></h1>
            
            <p><?= $data_artikel["deskripsi"] ?></p>
        </div>
    </div>
    <div class="card" style="width: 80%;">
        <div class="card-body">
            <h2 class="card-title text-center">Cara Menamam</h2>
            <p class="card-text text-justify"><?= $data_artikel["cara_menanam"] ?></p>
        </div>
    </div>
    <div class="card card2" style="width: 80%;">
        <div class="card-body">
            <h2 class="card-title text-center">Cara Merawat</h2>
            <p class="card-text text-justify"><?= $data_artikel["cara_merawat"] ?></p>
        </div>
    </div>
    <div class="text-center" style="margin-top: 2%;">
        <a href="belajar.php" type="button" class="btn btn-danger my-2">Kembali</a>
    </div>
</body>

</html>