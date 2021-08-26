<?php
session_start();

// menghapus session
session_destroy();

// arahkan ke halaman login
header('location:index.php?logout=berhasil');
