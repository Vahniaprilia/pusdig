<?php
 include 'layout/header.php';
?>

<div class="container">
    <div class="row my-3">
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body text-white text-center bg-primary">
            <h2>Data Buku</h2>
            <h1><b>100</b></h1>
          </div>
          <a href="buku.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body text-white text-center bg-info">
            <h2>Data Anggota</h2>
            <h1><b>220</b></h1>
          </div>
          <a href="anggota.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body text-white text-center bg-danger">
            <h2>Data Peminjam</h2>
            <h1><b>50</b></h1>
          </div>
          <a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6" style="margin-top: 7rem;">
        <h2>SELAMAT DATANG!</h2>
        <h3>Di Halaman Petugas</h3>
        <h6>Membaca adalah jendela dunia</h6>
      </div>
      <div class="col-sm-4" style="margin-top: -50px">
        <img src="../asset/img/kinci.png" width="400" alt="">
      </div>
    </div>
</div>


<?php
 include 'layout/footer.php';
?>