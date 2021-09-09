<h1>HALAMAN DATA BARANG</h1>

<table class="table table-striped mt-4">
    <thead>
        <tr>
            <a href="main.php?p=tambah_data_barang" class="btn btn-success mt-1">Tambah Data Barang</a>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM barang");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?= $data['kode_barang']; ?></td>
                <td><?= $data['nama_barang']; ?></td>
                <td><?= $data['jumlah_barang']; ?></td>
                <td><?= $data['harga_barang']; ?></td>
                <td>
                    <a href="main.php?p=edit_data_barang&kode_barang=<?= $data['kode_barang']; ?>" class="btn btn-primary">Edit</a>
                    <a href="proses.php?aksi=delete&kode_barang=<?= $data['kode_barang']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>