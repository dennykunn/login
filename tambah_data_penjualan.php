TAMBAH DATA PENJUALAN

<form action="proses.php" method="POST">
    <table class="table table-striped mt-4">
        <tr>
            <th scope="row">NO FAKTUR</th>
            <td scope="row"><input type="text" name="no_faktur"></td>
        </tr>
        <tr>
            <th scope="row">KODE BARANG</th>
            <td>
                <select name="kode_barang">
                    <option selected="selected">PILIH</option>
                    <?php
                    $query = mysqli_query($koneksi, "select * from barang");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <option value="<?= $data['kode_barang']; ?>"><?= $data['nama_barang']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <th scope="row">JUMLAH</th>
            <td scope="row"><input type="number" name="jumlah"></td>
        </tr>
        <tr>
            <th scope="row"></th>
            <td scope="row">
                <button name="simpan_penjualan" type="submit" class="btn btn-primary">Simpan</button>
                <a href="main.php?p=data_penjualan" class="btn btn-success">Kembali</a>
            </td>
        </tr>

    </table>
</form>