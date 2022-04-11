<?php
require('koneksi.php');
session_start();

$hitung_tanaman ="SELECT Count(id_tanaman) as data_hitungt From jenis_tanaman";
$data_hitungt = $conn -> query($hitung_tanaman);

$hitung_pengunjung ="SELECT Count(id) as data_hitungp From users";
$data_hitungp = $conn -> query($hitung_pengunjung);

if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: datapengunjung.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Spices Space | Home</title>
    <link rel="shortcut icon" href="img/fav-icn.svg" type="image/x-icon">
    <style>
        .bg {
            background-image: url('img/andrea-leon-vNrpgkrRtlk-unsplash.jpg');
            min-height: 100%;
        }
    </style>
</head>

<body class="skrol">
    <div class="jumbotron bg">
        <div class="container isijumbotron text-center">
            <h1 class="jumbotron-heading"><i>Spices Space</i></h1>
            <h6>Selamat Datang di <i>Spices Space</i> <br>Sebuah Website yang akan membantu kamu untuk memilih tanaman yang cocok untuk ditanam di lahanmu, dan tentu saja kamu bisa belajar menanam dan merawatnya disini!!</h6>
            <a href="#menu" class="btn btn-primary my-2">Mulai</a>
        </div>
       
    </div>
    <div class="container col-md-10 text-center">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Jumlah Tanaman</h5>
                    <div class="card-body">
                        <h5 class="card-title"> <?php
                        foreach($data_hitungt as $index => $jumlah){
                            echo $jumlah['data_hitungt'];
                        }
                        ?></a></h5>
                    </div>
                </div>
                </div>
            <div class="col-md-6">
            <div class="card">
                    <h5 class="card-header">Jumlah Pengunjung</h5>
                    <div class="card-body">
                        <h5 class="card-title"> <?php
                        foreach($data_hitungp as $index => $jumlah){
                            echo $jumlah['data_hitungp'];
                        }
                        ?></a></h5>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <div class="konten d-flex justify-content-around" id="menu">
        <div class="row justify-content-around">
            <div class="col col-md-4 border-dark card">
                <div class="card-body">
                    <h5 class="card-title">Belajar Menanam</h5>
                    <a href="belajar.php">
                        <img src="img/belajar.svg" class="card-img-bottom" alt="...">
                    </a>
                </div>
            </div>
            <div class="col col-md-4 border-dark card">
                    <div class="card-body">
                    <h5 class="card-title">Rekomendasi Tanaman</h5>
                    <a href="rekomen.html">
                        <img src="img/recom 1.svg" class="card-img-bottom" alt="...">
                        </a>
                </div>
            </div>
        </div>
    </div>
    <div>
    <div class="text-center">
    <a href="selesaibelajar.php" class="lgot btn btn-danger my-2 mb-5"> Selesai Belajar </a>
    </div>
    <div class="footer">
        <h5 style="text-align: center;"><i>© Spices Space</i></h5>
    </div>
</body>

</html>