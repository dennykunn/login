<?php
if (isset($_GET['kode_barang'])) {
    $kode_barang = $_GET['kode_barang'];
    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode_barang='$kode_barang'");
    $data = mysqli_fetch_array($query);
}
?>
<h4>FORM Edit Data Barang</h4>

<form action="proses.php" method="POST">
    <div class="form-group">
        <label>Kode Barang</label>
        <input type="text" class="form-control" name="kode_barang" value="<?= $data['kode_barang']; ?>">
    </div>
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang" value="<?= $data['nama_barang']; ?>">
    </div>
    <div class="form-group">
        <label>jumlah Barang</label>
        <input type="number" class="form-control" name="jumlah_barang" value="<?= $data['jumlah_barang']; ?>">
    </div>
    <div class=" form-group">
        <label>Harga Barang</label>
        <input type="text" class="form-control" name="harga_barang" value="<?= $data['harga_barang']; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="edit_barang">Simpan</button>
    <a href="main.php?p=data_barang" class="btn btn-success" method="POST">Kembali</a>
</form>