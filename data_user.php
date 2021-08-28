<h1>HALAMAN DATA USERS</h1>

<a class="btn btn-success mt-1">Tambah Data User</a>

<table class="table table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $query = mysqli_query($koneksi, "SELECT * FROM user");
    while($data = mysqli_fetch_array($query)) {
  ?>
    <tr>
      <td><?= $data['username']; ?></td>
      <td><?= $data['password']; ?></td>
      <td><?= $data['nama_lengkap']; ?></td>
      <td>
          <a class="btn btn-primary">Edit</a>
          <a class="btn btn-danger">Delete</a>
      </td>
    </tr>
  <?php
    }
  ?>
  </tbody>
</table>