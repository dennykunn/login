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
        // pindah ke halaman main.php
        header('location:main.php');
    } else {
        header('location:index.php?pesan=gagal');
    }
}
// batas proses login

// proses tambah user
if (isset($_POST['simpan_user'])) {
    // Ambil data input (username, password, nama_lengkap)
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $namalengkap = $_POST['nama_lengkap'];

    $query = mysqli_query($koneksi, "INSERT INTO user VALUES('','$username','$password','$namalengkap')");

    if ($query) {
        // pindah ke halaman main.php
        header('location:main.php?p=data_user');
    } else {
        header('location:main.php?pesan=gagal');
    }
}
// batas tambah user

//proses edit user
if (isset($_POST['edit_user'])) {
    // Ambil data input (id, username, password, nama_lengkap)
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $namalengkap = $_POST['nama_lengkap'];

    if ($password == "") {
        $query = mysqli_query($koneksi, "UPDATE user SET 
        username = '$username',
        nama_lengkap = '$namalengkap'
        WHERE user_id = '$id'");
    } else {
        $query = mysqli_query($koneksi, "UPDATE user SET 
        username = '$username',
        password = md5('$password'),
        nama_lengkap = '$namalengkap'
        WHERE user_id = '$id'");
    }

    if ($query) {
        header('location:main.php?p=data_user');
    }
}
// batas proses edit user

// proses delete user
if (isset($_GET['aksi'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM user where user_id='$id'");

    if ($query) {
        header('location:main.php?p=data_user');
    }
}
// batas proses delete user