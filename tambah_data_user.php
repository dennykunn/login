<h4>FORM Tambah Data User</h4>

<form action="proses.php" method="POST">
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap">
    </div>
    <button name="simpan_user" type="submit" class="btn btn-primary">Simpan</button>
    <a href="main.php?p=data_user" class="btn btn-success">Kembali</a>
</form>