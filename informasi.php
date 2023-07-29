<?php
require 'functions.php';
//ambil data di url

$id=$_GET["id"];

 //query data berdasarkan
 $anak = query ("SELECT * from anak where id=$id");
 $gigi = query ("SELECT * from gigi where id=$id");
 $umum = query ("SELECT * from umum where id=$id");


//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["post"]) ) {


//cek apakah data berhasil diubah atau tidak
  if(informasi($_POST) > 0 ) {
    echo "<script>
              alert('data berhasil dipost!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo  "
        <script>
        alert('data gagal diubah!');
        document.location.href = 'informasi.php';
        </script>
    ";
  }
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Poli anak</title>

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
        <a href="admin_caradaftar.php" class="list-group-item list-group-item-action bg-light">Cara Mendaftar</a>
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
              <td width="450" rowspan="2"><h5 class="">Pusat Informasi</h5></td>
            </tr>
        </table>
      </div>

        </div>

        <div class="row">
                <div class="col md">
                  <form class="" action="" method="post">
                    <div class="form-group">
                      <label for="" class="col-sm-2"><b>Informasi Poli Anak</b></label>
                      <div class="col-sm-5">
                        <input  class="form-control" type="hidden" name="id" id="id" value="<?php foreach ($anak as $row ) : ?><?= $row["id"]; ?> <?php endforeach; ?>" >
                      <select class="form-control" name="ket" id="ket">
                          <option value="1">Pendaftaran dibuka</option>
                          <option value="2">Pendaftaran untuk hari ini ditutup</option>
                          <option value="3">Dokter hari ini tidak praktek</option>
                      </select>
                      <button type="submit" name="post" class="btn btn-info mt-3">Post</button>
                      <button type="submit" name="batal" class="btn btn-info mt-3"><a href="admin.php" style="text-decoration:none" class="text-reset">Batal</a></button>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
<br>
              <div class="row">
                      <div class="col md">
                        <form class="" action="" method="post">
                          <input  class="form-control" type="hidden" name="id" id="id" value="<?php foreach ($gigi as $row ) : ?><?= $row["id"]; ?> <?php endforeach; ?>" >
                          <div class="form-group">
                            <label for="" class="col-sm-2"><b>Informasi Poli Gigi</b></label>
                            <div class="col-sm-5">
                            <select class="form-control" name="ket" id="ket">
                                <option value="1">Pendaftaran dibuka</option>
                                <option value="2">Pendaftaran untuk hari ini ditutup</option>
                                <option value="3">Dokter hari ini tidak praktek</option>
                            </select>
                            <button type="submit" name="post" class="btn btn-info mt-3">Post</button>
                            <button type="submit" name="batal" class="btn btn-info mt-3"><a href="admin.php" style="text-decoration:none" class="text-reset">Batal</a></button>
                          </div>
                          </div>
                        </form>
                      </div>
                    </div>
<br>
                    <div class="row">
                            <div class="col md">
                              <form class="" action="" method="post">
                                <input  class="form-control" type="hidden" name="id" id="id" value="<?php foreach ($umum as $row ) : ?><?= $row["id"]; ?> <?php endforeach; ?>" >
                                <div class="form-group">
                                  <label for="" class="col-sm-3"><b>Informasi Poli Umum</b></label>
                                  <div class="col-sm-5">
                                  <select class="form-control" name="ket" id="ket">
                                      <option value="1">Pendaftaran dibuka</option>
                                      <option value="2">Pendaftaran untuk hari ini ditutup</option>
                                      <option value="3">Dokter hari ini tidak praktek</option>
                                  </select>
                                  <button type="submit" name="post" class="btn btn-info mt-3">Post</button>
                                  <button type="submit" name="batal" class="btn btn-info mt-3"><a href="admin.php" style="text-decoration:none" class="text-reset">Batal</a></button>
                                </div>
                                </div>
                              </form>
                            </div>
                          </div>

      </div>
    </div>

  </div>


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
