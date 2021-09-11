<h1>HALAMAN DATA PENJUALAN</h1>

<table class="table table-striped mt-4">
    <thead>
        <tr>
            <a href="main.php?p=tambah_data_penjualan" class="btn btn-success mt-1">Tambah Data Barang</a>
            <th scope="col">No Faktur</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM penjualan");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?= $data['no_faktur']; ?></td>
                <td><?= $data['kode_barang']; ?></td>
                <td><?= $data['jumlah']; ?></td>
                <td>
                    <a href="main.php?p=edit_data_penjualan&no_faktur=<?= $data['no_faktur']; ?>" class="btn btn-primary">Edit</a>
                    <a href="proses.php?aksi=delete&no_faktur=<?= $data['no_faktur']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>