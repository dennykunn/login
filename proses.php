<?php
session_start();
include "koneksi.php";

if (isset($_POST['login'])) {

    // Ambil data form (username, password)
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE
    username = '$username' and password= '$password'");
    $data = mysqli_fetch_array($query);

    if ($data) {
        $_SESSION['id'] = $data['user_id'];
        $_SESSION['nama'] = $data['nama_lengkap'];
        header('location:main.php');
    } else {
        header('location:index.php?pesan=gagal');
    }
}
