<?php
 include 'layout/header.php';
?>

<div class="container">
    <div class="row" style="margin-top: 1rem;">
      <h2>Data Buku</h2>
      <div class="col">
        <a href="tambah_buku" class="btn btn-primary my-2 text-white">Tambah Buku</a>
      <table class="table mb-2">
            <thead class="table table-primary">
                <tr>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Laut Bercerita</td>
                <td>
                    <a href="" class="btn btn-primary text-white">Detail</a>
                    <a href="" class="btn btn-success text-white">Edit</a>
                    <a href="" class="btn btn-danger text-white">Delete</a>
                </td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>

<?php
 include 'layout/footer.php';
?>