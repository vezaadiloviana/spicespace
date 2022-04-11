<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-rekomen.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!--CB-modal -->
    <!-- Button trigger modal -->
    <title>Rekomendasi</title>
</head>

<body>
    <div class="jumbotron text-center bg" style="background-color: #3498DB;">
        <div class="container isijumbotron">
            <h1 class="jumbotron-heading"><i>Panduan Penggunaan</i></h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus iure quo totam, soluta beatae nulla
                sequi non explicabo ullam, voluptas iusto repellendus dignissimos. A libero molestiae autem ullam
                voluptates! Consequuntur.</p>
        </div>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="card" style="width: 80%;">
            <div class="card-body text-center">
                <h2 class="card-title">Pertanyaan Dataran</h2>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem distinctio fugiat
                    explicabo quisquam, voluptas dolore possimus consectetur asperiores porro cumque, recusandae sit,
                    nesciunt rem magnam ratione quo numquam repudiandae incidunt.</p>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Masukan Nilai</label>
                    <input type="text" name="tinggi"> <br>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top: 2%;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Cari Tahu
            </button>
        </div>
    </form>
    <div class="text-center" style="margin-top: 1%;">
        <a href="index.html" type="button" class="btn btn-danger my-2">Kembali</a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hasil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <?php
                        echo $_POST['tinggi'];
                        echo $_REQUEST['tinggi'];
                    ?>
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="belajar.php" type="button" class="btn btn-primary">Mulai Belajar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- JS code -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
    <!--JS below-->