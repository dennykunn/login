<h1>HALAMAN DATA USERS</h1>

<table class="table table-striped mt-4">
  <thead>
    <tr>
      <a href="main.php?p=tambah_data_user" class="btn btn-success mt-1">Tambah Data User</a>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM user");
    while ($data = mysqli_fetch_array($query)) {
    ?>
      <tr>
        <td><?= $data['username']; ?></td>
        <td><?= $data['password']; ?></td>
        <td><?= $data['nama_lengkap']; ?></td>
        <td>
          <a href="main.php?p=edit_data_user&id=<?= $data['user_id']; ?>" class="btn btn-primary">Edit</a>
          <a href="proses.php?aksi=delete&id=<?= $data['user_id']; ?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>