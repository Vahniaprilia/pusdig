<?php
 include 'layout/header.php';
?>

<div class="container">
    <div class="row" style="margin-top: 1rem;">
    <div class="col">
      <h2>Data Peminjaman</h2>
      <a href="tambah_buku" class="btn btn-primary mt-3 text-white">Tambah Peminjam</a>
      <table class="table my-2">
            <thead class="table table-primary">
                <tr>
                    <th scope="col">ID Peminjaman</th>
                    <th scope="col">ID Buku</th>
                    <th scope="col">ID User</th>
                    <th scope="col">Nama Peminjaman</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Status Peminjaman</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>A01</td>
                    <td>Jemma01</td>
                    <td>Najemma</td>
                    <td>02-01-24</td>
                    <td>09-01-24</td>
                    <td>Dipinjam</td>
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