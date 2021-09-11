<h4>FORM Tambah Data Barang</h4>

<form action="proses.php" method="POST">
    <div class="form-group">
        <label>kode Barang</label>
        <input type="kode" class="form-control" name="kode_barang">
    </div>
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang">
    </div>
    <div class="form-group">
        <label>Jumlah Barang</label>
        <input type="number" class="form-control" name="jumlah_barang">
    </div>
    <div class="form-group">
        <label>Harga Barang</label>
        <input type="text" class="form-control" name="harga_barang">
    </div>
    <button name="simpan_barang" type="submit" class="btn btn-primary">Simpan</button>
    <a href="main.php?p=data_barang" class="btn btn-success">Kembali</a>
</form>