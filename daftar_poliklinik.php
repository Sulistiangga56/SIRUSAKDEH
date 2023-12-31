<?php
require 'functions.php';
$hari = array ( 1 =>    'Senin',
                        'Selasa',
                        'Rabu',
                        'Kamis',
                        'Jumat',
                        'Sabtu',
                        'Minggu'
                      );

$tgl = date('d-m-Y');
$daftar_poliklinik = query("SELECT id_poli,nama_poli from poliklinik");

 ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rumah Sakit Damai Elok Hospital</title>

  <!-- Bootstrap core CSS -->
  <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="admin/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><center><img src="img/logo.png" style="width: 150px; background: transparent;"></center></div>
      <div class="list-group list-group-flush">
        <a href="admin.php" class="list-group-item list-group-item-action bg-light">Beranda</a>
        <a href="data_pendaftar.php" class="list-group-item list-group-item-action bg-light">Data Pendaftar</a>
        <a href="daftar_poliklinik.php" class="list-group-item list-group-item-action bg-light">Daftar Poliklinik</a>
        <a href="jadwal_dokter.php" class="list-group-item list-group-item-action bg-light">Jadwal Dokter</a>
<!--        <a href="admin_caradaftar.php" class="list-group-item list-group-item-action bg-light">Cara Mendaftar</a>-->
        <a href="laporan.php" class="list-group-item list-group-item-action bg-light">Laporan</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <button class="btn btn-info" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Halaman Admin<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
                </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row">
        <div class="col mt-1">
          <table class="table table-sm table-borderless">
            <tr>
              <td width="800" rowspan="2"><h5 class="">Data Poli Poli Rawat Jalan</h5><button type="button" class="btn btn-outline-info btn-sm mt-1"><a href="tambah_poli.php" class="text-reset" style="text-decoration:none">Tambah</a></button></td>
            </tr>
        </table>
      </div>
        </div>

        <div class="row">
                <div class="col md">
                    <table class="table table-sm table-bordered">
                      <thead>
                      <tr class="table-info">
                        <th class="text-center"scope="col"width="30">No</th>
                        <th hidden class="text-center" width="125">Id Poli</th>
                        <th class="text-center" width="150">Nama Poli</th>
                        <th width="100" class="text-center">Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php  foreach ($daftar_poliklinik as $row ) : ?>

                             <tr>
                               <td><center><?= $i; ?></center></td>
                               <td hidden><center><?= $row["id_poli"]; ?></center></td>
                               <td><center><?= $row["nama_poli"]; ?></center></td>
                               <td>
                                   <center><button type="button" class="btn btn-outline-info btn-sm mt-1"><a href="edit_poli.php?id_poli=<?= $row["id_poli"]?>" class="text-reset" style="text-decoration:none">Rubah</a> </button>
                                   <button type="button" class="btn btn-outline-info btn-sm mt-1"><a href="hapus_poli.php?id_poli=<?= $row["id_poli"]?>" class="text-reset" onclick=" return confirm('Anda Yakin?');" style="text-decoration:none">Hapus</a></button>
                               </center>
                             </td>
                             </tr>
                             <?php $i++ ?>
                           <?php endforeach; ?>
                      </tbody>

                    </table>

                </div>
              </div>

      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
