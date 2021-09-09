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

// proses tambah data user
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
// batas tambah data user

//proses edit data user
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
// batas proses data edit user

// proses delete data user
if (isset($_GET['aksi'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM user where user_id='$id'");

    if ($query) {
        header('location:main.php?p=data_user');
    }
}
// batas proses data delete user

// proses tambah data barang
if (isset($_POST['simpan_barang'])) {
    // Ambil data input (nama barang, jumlah barang, harga barang)
    $kode = $_POST['kode_barang'];
    $namabarang = $_POST['nama_barang'];
    $jumlahbarang = $_POST['jumlah_barang'];
    $hargabarang = $_POST['harga_barang'];

    $query = mysqli_query($koneksi, "INSERT INTO barang VALUES('$kode','$namabarang','$jumlahbarang','$hargabarang')");

    if ($query) {
        // pindah ke halaman main.php
        header('location:main.php?p=data_barang');
    } else {
        header('location:main.php?pesan=gagal');
    }
}
// batas tambah data barang

//proses edit data barang
if (isset($_POST['edit_barang'])) {
    // Ambil data input (kode_barang, nama_barang, jumlah_barang, harga_barang)
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $harga_barang = $_POST['harga_barang'];

    $query = mysqli_query($koneksi, "UPDATE barang SET 
        nama_barang = '$nama_barang',
        jumlah_barang = '$jumlah_barang',
        harga_barang = '$harga_barang'
        WHERE kode_barang = '$kode_barang'");

    if ($query) {
        header('location:main.php?p=data_barang');
    }
}
// batas proses data edit data barang

// proses delete data barang
if (isset($_GET['aksi'])) {
    $kode_barang = $_GET['kode_barang'];

    $query = mysqli_query($koneksi, "DELETE FROM barang where kode_barang='$kode_barang'");

    if ($query) {
        header('location:main.php?p=data_barang');
    }
}
// batas proses delete data barang

// proses tambah data penjualan
if (isset($_POST['simpan_penjualan'])) {
    // Ambil data input (nama barang, jumlah barang, harga barang)
    $kode = $_POST['kode_barang'];
    $no_faktur = $_POST['no_faktur'];
    $jumlah = $_POST['jumlah'];

    $query = mysqli_query($koneksi, "INSERT INTO penjualan VALUES('$no_faktur','$kode','$jumlah')");

    if ($query) {
        // pindah ke halaman main.php
        header('location:main.php?p=data_penjualan');
    } else {
        header('location:main.php?pesan=gagal');
    }
}
// batas tambah data penjualan

//proses edit data barang
if (isset($_POST['edit_penjualan'])) {
    // Ambil data input (kode_barang, nama_barang, jumlah_barang, harga_barang)
    $no_faktur = $_POST['no_faktur'];
    $kode_barang = $_POST['kode_barang'];
    $jumlah = $_POST['jumlah'];

    $query = mysqli_query($koneksi, "UPDATE penjualan SET 
        no_faktur = '$no_faktur',
        jumlah = '$jumlah' WHERE kode_barang = '$kode_barang'");

    if ($query) {
        header('location:main.php?p=data_penjualan');
    }
}
// batas proses data edit data barang

// proses delete data barang
if (isset($_GET['aksi'])) {
    $no_faktur = $_GET['kode_barang'];

    $query = mysqli_query($koneksi, "DELETE FROM penjualan where no_faktur ='$no_faktur'");

    if ($query) {
        header('location:main.php?p=data_penjualan');
    }
}
// batas proses delete data barang