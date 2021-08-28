<?php
session_start();
include "koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <title>Aplikasi Penjualan</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">APLIKASI PENJUALAN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="main.php?p=beranda">BERANDA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="main.php?p=data_user">DATA USERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="main.php?p=data_barang">DATA BARANG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="main.php?p=data_penjualan">DATA PENJUALAN</a>
                    </li>
                </ul>
                <div class="ml-auto"><a class="btn btn-danger" href="logout.php">LOGOUT</a></div>
            </div>
        </div>
    </nav>

    <!--  -->
    <div class="bg-light border-bottom py-3">
        <div class="container d-flex align-items-center">
            <img src="images/keranjang.png" alt="Keranjang" width="50">
            <p class="ml-2">Selamat Datang, <span class="font-weight-bold"><?= $_SESSION['nama']; ?></span> di Aplikasi Penjualan Rekayasa Perangkat Lunak <span class="font-weight-bold">(RPL SMK Taruna Persada)</span></p>
        </div>
    </div>

    <!--  -->
    <div class="container border mt-2 py-3 bg-light">
        <?php
            if (isset($_GET['p'])) {
                include $_GET['p'].".php";
            } else {
                include "beranda.php";
            }
        ?>
    </div>


    <!--  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>