<?php
if (isset($_GET['no_faktur'])) {
    $no_faktur = $_GET['no_faktur'];
    $query = mysqli_query($koneksi, "SELECT * FROM penjualan WHERE no_faktur='$no_faktur'");
    $data = mysqli_fetch_array($query);
}
?>
<h4>FORM Edit Data Penjualan</h4>

<form action="proses.php" method="POST">
    <div class="form-group">
        <label>No Faktur</label>
        <input type="text" class="form-control" name="no_faktur" value="<?= $data['no_faktur']; ?>">
    </div>
    <div class="form-group">
        <label>Kode Barang</label>
        <input type="text" class="form-control" name="kode_barang" value="<?= $data['kode_barang']; ?>">
    </div>
    <div class="form-group">
        <label>jumlah</label>
        <input type="number" class="form-control" name="jumlah" value="<?= $data['jumlah']; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="edit_penjualan">Simpan</button>
    <a href="main.php?p=data_penjualan" class="btn btn-success" method="POST">Kembali</a>
</form>