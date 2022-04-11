<?php
    include "koneksi.php";

    $jns_tanaman  = "SELECT * from jenis_tanaman";
    $data_tanaman = $conn->query($jns_tanaman);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-belajar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/fav-icn.svg" type="image/x-icon">
    <title>Spices Space | Belajar</title>
</head>

<body>
    <div class="jumbotron text-center bg">
        <div class="container isijumbotron">
            <h1 class="jumbotron-heading"><i>Mari Belajar Menanam</i></h1>
            <h6>Palajari cara menanam dan cara merawat dari berbagai jenis unggulan tanaman palawija. Materi diambil dari sumber yang terpecaya dan padat dipahami dengan mudah. Belajar makin asyik dan mudah dengan <i>Spices Space.</i></h6>
        </div>
    </div>
    <div class="konten">
        <?php
            foreach ($data_tanaman as $key => $value) {
        ?>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                <a href="artikel.php?id=<?php echo $value['id_tanaman'] ?>">
                    <h6 class="my-0">
                            <?php echo $value['nama'] ?>
                            <span><img src="img/arrow-right.svg"></span>
                    </h6>
                    </li>
                </a>
            </ul>
        <?php
            }
        ?>
    </div>
    <div class="kembali text-center">
        <a href="index.php" type="button" class="btn btn-danger">Kembali</a>
    </div>
</body>
</html>