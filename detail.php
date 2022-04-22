<?php

require 'functions.php';
$host       = 'localhost';
$user       = 'root';
$password   = '';
$db         = 'gg';
$conn = mysqli_connect($host, $user, $password, $db) or die(mysql_error());

$datahotel = mysqli_query($conn, "SELECT * FROM hotel WHERE id_hotel = '".$_GET['id']."' ");
$d = mysqli_fetch_object($datahotel); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="assets/img/logomini.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Dashboard User
        </a>
        <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
        </div>
    </nav>
   
    <!-- <img src="gambar/<?php echo $d->gambar ?>" alt=""> -->
        <div class="card mb-3 mt-5 mx-auto">
        <div class="card">
        <div class="card-body">
            <h1 class="card-title"><?php echo $d->hotel ?></h1>
            <h5 class="card-text">Alamat    : <?php echo $d->alamat ?></h5>
            <p class="card-text">Fasilitas : <?php echo $d->desc ?></p>
            <p class="card-text">Harga     : <?php echo $d->harga ?></p>
            <p class="card-text">Rating    : <?php echo $d->rating ?></p>
        </div>
        <img class="card-img-bottom" src="gambar/<?php echo $d->gambar ?>" width="780" height="580" alt="Card image cap">
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>