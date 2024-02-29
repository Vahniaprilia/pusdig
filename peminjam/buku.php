<?php 
  include 'layout/header.php';
?>
<body style="background-color: #3D246C;">
  <div class="container text-white" style="margin-top: 2rem;">
    <div class="row">
    <h3>Pilihan Buku</h3>
    <?php
      include '../koneksi/koneksi.php';
      $no = 1;
      $data = mysqli_query($koneksi, "SELECT *FROM buku Order by IDbuku asc");

      while ($d= mysqli_fetch_array($data)) {
 
    ?>
      <div class="card" style="width: 14rem;">
      <img src="../asset/img/lautbercerita.jpeg" class="card-img-top" alt="..." style="margin-top: 8px;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $d['judul'];?></h5>
          <h6>Tahun Terbit : <?php echo $d['tahunterbit'];?></h6>
          <a href="data/detail.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-warning text-white">Detail</a>
          <a href="data/pinjam_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-primary">Pinjam</a>
        </div>
      </div>
      <?php
      }
          ?>
    </div>
  </div>

<?php
  include 'layout/footer.php';
?>
</body>