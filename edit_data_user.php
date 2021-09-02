<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$id'");
    $data = mysqli_fetch_array($query);
}
?>
<h4>FORM Tambah Data User</h4>

<form action="proses.php" method="POST">
    <div class="form-group">
        <input type="hidden" name="id" value="<?= $data['user_id']; ?>">
        <input type="text" class="form-control" name="username" value="<?= $data['username']; ?>">
        <label>Username</label>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" value="<?= $data['password']; ?>">
    </div>
    <div class=" form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" value="<?= $data['nama_lengkap']; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="edit_user">Simpan</button>
    <a href="main.php?p=data_user" class="btn btn-success">Kembali</a>
</form>