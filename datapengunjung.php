
<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- costum css -->
<link rel="stylesheet" href="css/style-login-logout.css">
<style>
        .bg {
            background-image: url('img/andrea-leon-vNrpgkrRtlk-unsplash.jpg');
            min-height: 100%;
        }
    </style>
</head>
 
<body class="bg">
<?php
//menyertakan file program koneksi.php pada register
require('koneksi.php');

session_start();

$error = '';
$validate = '';
if( isset($_SESSION['user']) ) header('Location: index.php');
//mengecek apakah data username yang diinpukan user kosong atau tidak
if( isset($_POST['submit']) ){
        
        // menghilangkan backshlases
        $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($conn, $username);
        $name     = stripslashes($_POST['name']);
        $name     = mysqli_real_escape_string($conn, $name);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
       
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($name)) && !empty(trim($username)) && !empty(trim($email))){
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembal
                if( cek_nama($name,$conn) == 0 ){
                    //insert data ke database
                    $query = "INSERT INTO users (username,name,email) VALUES ('$username','$nama','$email')";
                    $result   = mysqli_query($conn, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['username'] = $username;
                       
                        header('Location: index.php');
                    
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                }else{
                        $error =  'Username sudah terdaftar !!';
                }
            
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 

    //fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($username,$conn){
        $nama = mysqli_real_escape_string($conn, $username);
        $query = "SELECT * FROM users WHERE username = '$nama'";
        if( $result = mysqli_query($conn, $query) ) return mysqli_num_rows($result);
    }
?>
        <section class="container-fluid mb-4">
            <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
            <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form class="form-container" action="datapengunjung.php" method="POST">
                    <h4 class="text-center font-weight-bold"> Data Pengunjung </h4>
                    <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
                   
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Alamat Email</label>
                        <input type="email" class="form-control" id="InputEmail" name="email" aria-describeby="emailHelp" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="username">Alamat</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Mulai Belajar</button>
                </form>
            </section>
            </section>
        </section>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
