<?php
session_start();
require 'functions.php';

$informasi = query ("SELECT * from informasi ");

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
                    <a class="nav-link" href="">Halaman Admin<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#" onclick="logoutConfirmation()">Logout</a>
                </li>
                </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h3 class="mt-3">Pendaftaran Online Pasien Poliklinik  </h3>
        <p>Selamat datang di halaman admin pendaftaran Pasien rawat jalan Rumah Sakit Damai Elok Hospital. </p>
        <br>
        <div class="row">
          <div class="col-sm-4 mb-3">
            <form  action="" method="post">
            <table class="table table-bordered">
              <tr>
                <td width="330"><center><h5>Poli Anak</h5></center></td>
                <td><center>
                  <button type="button" class="btn btn-info tanak" data-toggle="modal">Anak</button>
                </center>
              </tr>
              <tr>
                <td height="80" colspan="2">
                  <input type="hidden" name="id" value="<?=$row["id"];?>" >
                  <?php  foreach ($informasi as $row ) : ?>
                         <?= $row["anak"]; ?>
                       <?php endforeach; ?>
                </td>
              </tr>
              <tr>
                <td colspan="2"><h6>
                  <?php
                  date_default_timezone_set("Asia/Jakarta");
                  $jam = date ("H:i:s");
                  echo "<b> " . " " ." </b> ";
                  $a = date ("H");
                  if (($a>=6) && ($a<=9)) {
                      echo " <b> Selamat Pagi! Pendaftaran sudah dibuka </b>";
                  }else if(($a>=9) && ($a<=13)){
                      echo " dr. Dion Wiyoko, Sp.A ";
                  }elseif(($a>13) && ($a<=20)){
                      echo "dr. Suryono Hanung, Sp.A";
                  }else{
                      echo "<b> Selamat malam !!  </b>";
                  }
                   ?></h6>
                </td>
              </tr>
          </table>
          </div>

          <div class="col-sm-4 mb-3">
            <table class="table table-bordered">
              <tr>
                <td width="330"><center><h5>Poli Gigi</h5></center></td>
                <td><center><button type="button" class="btn btn-info tgigi" data-toggle="modal">Gigi</button></center>
              </tr>
              <tr>
                <td height="80" colspan="2">
                  <input type="hidden" name="id" value="<?=$row["id"];?>" >
                  <?php  foreach ($informasi as $row ) : ?>
                         <?= $row["gigi"]; ?>
                       <?php endforeach; ?>
                </td>
              </tr>
              <tr>
                <td colspan="2"><h6>
                  <?php
                  date_default_timezone_set("Asia/Jakarta");
                  $jam = date ("H:i:s");
                  echo "<b> " . " " ." </b> ";
                  $a = date ("H");
                  if (($a>=6) && ($a<=9)) {
                      echo " <b> Selamat Pagi! Pendaftaran sudah dibuka </b>";
                  }else if(($a>=9) && ($a<=13)){
                      echo "drg. Gunawan Prasetya";
                  }elseif(($a>13) && ($a<=20)){
                      echo "drg. Lintang Mulan";
                  }else{
                      echo "<b> Selamat malam !!  </b>";
                  }
                   ?></h6>
                </td>
              </tr>
            </table>
          </div>

          <div class="col-sm-4 mb-3">
            <table class="table table-bordered">
              <tr>
                <td width="330"><center><h5>Poli Kandungan</h5></center></td>
                <td><center><button type="button" class="btn btn-info tkandungan" data-toggle="modal">kandungan</button></center>
              </tr>
              <tr>
                <td height="80" colspan="2">
                  <input type="hidden" name="id" value="<?=$row["id"];?>" >
                  <?php  foreach ($informasi as $row ) : ?>
                         <?= $row["kandungan"]; ?>
                       <?php endforeach; ?>
                </td>
              </tr>
              <tr>
                <td colspan="2"><h6>
                  <?php
                  date_default_timezone_set("Asia/Jakarta");
                  $jam = date ("H:i:s");
                  echo "<b> " . " " ." </b> ";
                  $a = date ("H");
                  if (($a>=6) && ($a<=9)) {
                      echo " <b> Selamat Pagi! Pendaftaran sudah dibuka </b>";
                  }else if(($a>=9) && ($a<=13)){
                      echo "drg. Andi Irianto";
                  }elseif(($a>13) && ($a<=20)){
                      echo "drg. Indah Permata";
                  }else{
                      echo "<b> Selamat malam !!  </b>";
                  }
                   ?></h6>
                </td>
              </tr>
            </table>
          </div>

          <div class="col-sm-4 mb-3">
            <table class="table table-bordered">
              <tr>
                <td width="330"><center><h5>Poli Mata</h5></center></td>
                <td><center><button type="button" class="btn btn-info tmata" data-toggle="modal">mata</button></center>
              </tr>
              <tr>
                <td height="80" colspan="2">
                  <input type="hidden" name="id" value="<?=$row["id"];?>" >
                  <?php  foreach ($informasi as $row ) : ?>
                         <?= $row["mata"]; ?>
                       <?php endforeach; ?>
                </td>
              </tr>
              <tr>
                <td colspan="2"><h6>
                  <?php
                  date_default_timezone_set("Asia/Jakarta");
                  $jam = date ("H:i:s");
                  echo "<b> " . " " ." </b> ";
                  $a = date ("H");
                  if (($a>=6) && ($a<=9)) {
                      echo " <b> Selamat Pagi! Pendaftaran sudah dibuka </b>";
                  }else if(($a>=9) && ($a<=13)){
                      echo "drg. Lokika santa";
                  }elseif(($a>13) && ($a<=20)){
                      echo "drg. Nikita sirn";
                  }else{
                      echo "<b> Selamat malam !!  </b>";
                  }
                   ?></h6>
                </td>
              </tr>
            </table>
          </div>

          <div class="col-sm-4 mb-3">
            <table class="table table-bordered">
              <tr>
                <td width="330"><center><h5>Poli THT</h5></center></td>
                <td><center><button type="button" class="btn btn-info ttht" data-toggle="modal">tht</button></center>
              </tr>
              <tr>
                <td height="80" colspan="2">
                  <input type="hidden" name="id" value="<?=$row["id"];?>" >
                  <?php  foreach ($informasi as $row ) : ?>
                         <?= $row["tht"]; ?>
                       <?php endforeach; ?>
                </td>
              </tr>
              <tr>
                <td colspan="2"><h6>
                  <?php
                  date_default_timezone_set("Asia/Jakarta");
                  $jam = date ("H:i:s");
                  echo "<b> " . " " ." </b> ";
                  $a = date ("H");
                  if (($a>=6) && ($a<=9)) {
                      echo " <b> Selamat Pagi! Pendaftaran sudah dibuka </b>";
                  }else if(($a>=9) && ($a<=13)){
                      echo "drg. Chika Legista";
                  }elseif(($a>13) && ($a<=20)){
                      echo "drg. Rizky born";
                  }else{
                      echo "<b> Selamat malam !!  </b>";
                  }
                   ?></h6>
                </td>
              </tr>
            </table>
          </div>

          <div class="col-sm-4 mb-3">
            <table class="table table-bordered">
              <tr>
                <td width="330"><center><h5>Poli Kulit dan Kelamin</h5></center></td>
                <td><center><button type="button" class="btn btn-info tkulit" data-toggle="modal">kulit</button></center>
              </tr>
              <tr>
                <td height="80" colspan="2">
                  <input type="hidden" name="id" value="<?=$row["id"];?>" >
                  <?php  foreach ($informasi as $row ) : ?>
                         <?= $row["kulit"]; ?>
                       <?php endforeach; ?>
                </td>
              </tr>
              <tr>
                <td colspan="2"><h6>
                  <?php
                  date_default_timezone_set("Asia/Jakarta");
                  $jam = date ("H:i:s");
                  echo "<b> " . " " ." </b> ";
                  $a = date ("H");
                  if (($a>=6) && ($a<=9)) {
                      echo " <b> Selamat Pagi! Pendaftaran sudah dibuka </b>";
                  }else if(($a>=9) && ($a<=13)){
                      echo "drg. Asep Gunawam";
                  }elseif(($a>13) && ($a<=20)){
                      echo "drg. Lily udaan";
                  }else{
                      echo "<b> Selamat malam !!  </b>";
                  }
                   ?></h6>
                </td>
              </tr>
            </table>
          </div>

          <div class="col-sm-4 mb-3">
            <table class="table table-bordered">
              <tr>
                <td width="330"><center><h5>Poli Umum</h5></center></td>
                <td><center><button type="button" class="btn btn-info tumum" data-toggle="modal">Umum</button></center>
                </td>
                </tr>
                <tr>
                  <td height="80" colspan="2">
                    <input type="hidden" name="id" value="<?=$row["id"];?>" >
                    <?php  foreach ($informasi as $row ) : ?>
                           <?= $row["umum"]; ?>
                         <?php endforeach; ?>
                  </td>
                </tr>
                <td colspan="2"><h6>
                  <?php
                  date_default_timezone_set("Asia/Jakarta");
                  $jam = date ("H:i:s");
                  echo "<b> " . " " ." </b> ";
                  $a = date ("H");
                  if (($a>=6) && ($a<=9)) {
                      echo " <b> Selamat Pagi! Pendaftaran sudah dibuka </b>";
                  }else if(($a>=9) && ($a<=13)){
                      echo "dr. Adi Hapsah";
                  }elseif(($a>13) && ($a<=20)){
                      echo "dr. Intan Rahmawati";
                  }else{
                      echo "<b> Selamat malam !!  </b>";
                  }
                   ?></h6>
                </td>
                </tr>
            </table>
          </form>
          </div>
          </div>
    </div>

<!-- anak-->
    <div class="modal fade" id="anak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Informasi Poli anak</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form  action="" method="post">

              <?php

              $anak = query("SELECT id,anak from informasi where id")[0];

              //cek apakah tombol submit sudah ditekan atau belum
              if(isset($_POST["postanak"]) ) {


              //cek apakah data berhasil diubah atau tidak
                if(anak_info($_POST) > 0 ) {
                  echo "<script>
                            alert('data berhasil diubah!');
                            document.location.href = 'admin.php';
                        </script>";
                } else {
                  echo  "
                      <script>
                      alert('data gagal diubah!');
                      document.location.href = 'admin.php';
                      </script>
                  ";
                }
              }
              ?>
              <div class="form-group">
                <label for="" class="col-sm-7"><b>Informasi Poli Anak</b></label>
                <div class="col-sm-13">
                  <input  class="form-control" type="hidden" name="id" id="id" value="<?= $anak["id"];?>">
                  <textarea class="form-control" id="anak" name="anak" rows="3" cols="13"><?= $anak["anak"];?></textarea>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="postanak" class="btn btn-info">Post</button>
          </div>
        </form>
          </div>
        </div>
      </div>
    </div>

    <!-- gigi-->
        <div class="modal fade" id="gigi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi Poli Gigi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="" action="" method="post">

                  <?php
                  $gigi = query("SELECT id,gigi from informasi where id")[0];

                  //cek apakah tombol submit sudah ditekan atau belum
                  if(isset($_POST["postgigi"]) ) {

                  //cek apakah data berhasil diubah atau tidak
                    if(gigi_info($_POST) > 0 ) {
                      echo "<script>
                                alert('data berhasil diubah!');
                                document.location.href = 'admin.php';
                            </script>";
                    } else {
                      echo  "
                          <script>
                          alert('data gagal diubah!');
                          document.location.href = 'admin.php';
                          </script>
                      ";
                    }
                  }
                  ?>

                  <div class="form-group">
                    <label for="" class="col-sm-7"><b>Informasi Poli Gigi</b></label>
                    <div class="col-sm-13">
                      <input  class="form-control" type="hidden" name="id" id="id" value="<?= $gigi["id"];?>">
                      <textarea class="form-control" id="gigi" name="gigi" rows="3" cols="13"><?= $gigi["gigi"];?></textarea>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="postgigi" class="btn btn-info">Post</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <!-- kandungan-->
        <div class="modal fade" id="kandungan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi Poli kandungan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="" action="" method="post">

                  <?php
                  $kandungan = query("SELECT id,kandungan from informasi where id")[0];

                  //cek apakah tombol submit sudah ditekan atau belum
                  if(isset($_POST["postkandungan"]) ) {

                  //cek apakah data berhasil diubah atau tidak
                    if(kandungan_info($_POST) > 0 ) {
                      echo "<script>
                                alert('data berhasil diubah!');
                                document.location.href = 'admin.php';
                            </script>";
                    } else {
                      echo  "
                          <script>
                          alert('data gagal diubah!');
                          document.location.href = 'admin.php';
                          </script>
                      ";
                    }
                  }
                  ?>

                  <div class="form-group">
                    <label for="" class="col-sm-7"><b>Informasi Poli kandungan</b></label>
                    <div class="col-sm-13">
                      <input  class="form-control" type="hidden" name="id" id="id" value="<?= $kandungan["id"];?>">
                      <textarea class="form-control" id="kandungan" name="kandungan" rows="3" cols="13"><?= $kandungan["kandungan"];?></textarea>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="postkandungan" class="btn btn-info">Post</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <!-- mata-->
        <div class="modal fade" id="mata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi Poli mata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="" action="" method="post">

                  <?php
                  $mata = query("SELECT id,mata from informasi where id")[0];

                  //cek apakah tombol submit sudah ditekan atau belum
                  if(isset($_POST["postmata"]) ) {

                  //cek apakah data berhasil diubah atau tidak
                    if(mata_info($_POST) > 0 ) {
                      echo "<script>
                                alert('data berhasil diubah!');
                                document.location.href = 'admin.php';
                            </script>";
                    } else {
                      echo  "
                          <script>
                          alert('data gagal diubah!');
                          document.location.href = 'admin.php';
                          </script>
                      ";
                    }
                  }
                  ?>

                  <div class="form-group">
                    <label for="" class="col-sm-7"><b>Informasi Poli mata</b></label>
                    <div class="col-sm-13">
                      <input  class="form-control" type="hidden" name="id" id="id" value="<?= $mata["id"];?>">
                      <textarea class="form-control" id="mata" name="mata" rows="3" cols="13"><?= $mata["mata"];?></textarea>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="postmata" class="btn btn-info">Post</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <!-- tht-->
        <div class="modal fade" id="tht" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi Poli tht</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="" action="" method="post">

                  <?php
                  $tht = query("SELECT id,tht from informasi where id")[0];

                  //cek apakah tombol submit sudah ditekan atau belum
                  if(isset($_POST["posttht"]) ) {

                  //cek apakah data berhasil diubah atau tidak
                    if(tht_info($_POST) > 0 ) {
                      echo "<script>
                                alert('data berhasil diubah!');
                                document.location.href = 'admin.php';
                            </script>";
                    } else {
                      echo  "
                          <script>
                          alert('data gagal diubah!');
                          document.location.href = 'admin.php';
                          </script>
                      ";
                    }
                  }
                  ?>

                  <div class="form-group">
                    <label for="" class="col-sm-7"><b>Informasi Poli tht</b></label>
                    <div class="col-sm-13">
                      <input  class="form-control" type="hidden" name="id" id="id" value="<?= $tht["id"];?>">
                      <textarea class="form-control" id="tht" name="tht" rows="3" cols="13"><?= $tht["tht"];?></textarea>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="posttht" class="btn btn-info">Post</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <!-- kulit-->
        <div class="modal fade" id="kulit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi Poli kulit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="" action="" method="post">

                  <?php
                  $kulit = query("SELECT id,kulit from informasi where id")[0];

                  //cek apakah tombol submit sudah ditekan atau belum
                  if(isset($_POST["postkulit"]) ) {

                  //cek apakah data berhasil diubah atau tidak
                    if(kulit_info($_POST) > 0 ) {
                      echo "<script>
                                alert('data berhasil diubah!');
                                document.location.href = 'admin.php';
                            </script>";
                    } else {
                      echo  "
                          <script>
                          alert('data gagal diubah!');
                          document.location.href = 'admin.php';
                          </script>
                      ";
                    }
                  }
                  ?>

                  <div class="form-group">
                    <label for="" class="col-sm-7"><b>Informasi Poli kulit</b></label>
                    <div class="col-sm-13">
                      <input  class="form-control" type="hidden" name="id" id="id" value="<?= $kulit["id"];?>">
                      <textarea class="form-control" id="kulit" name="kulit" rows="3" cols="13"><?= $kulit["kulit"];?></textarea>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="postkulit" class="btn btn-info">Post</button>
              </div>
              </form>
            </div>
          </div>
        </div>

<!-- umum-->
<div class="modal fade" id="umum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi Poli Umum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="" method="post">

          <?php
          $umum = query("SELECT id,umum from informasi where id")[0];

          //cek apakah tombol submit sudah ditekan atau belum
          if(isset($_POST["postumum"]) ) {

          //cek apakah data berhasil diubah atau tidak
            if(umum_info($_POST) > 0 ) {
              echo "<script>
                        alert('data berhasil diubah!');
                        document.location.href = 'admin.php';
                    </script>";
            } else {
              echo  "
                  <script>
                  alert('data gagal diubah!');
                  document.location.href = 'admin.php';
                  </script>
              ";
            }
          }
          ?>

          <div class="form-group">
            <label for="" class="col-sm-7"><b>Informasi Poli Umum</b></label>
            <div class="col-sm-13">
              <input  class="form-control" type="hidden" name="id" id="id" value="<?= $umum["id"];?>">
              <textarea class="form-control" id="umum" name="umum" rows="3" cols="13"><?= $umum["umum"];?></textarea>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="postumum" class="btn btn-info">Post</button>
      </div>
      </form>
    </div>
  </div>
</div>

  </div>
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
<script>
$(document).ready(function(){
  $('.tanak').on('click', function(){
    $('#anak').modal('show');
  });
});

$(document).ready(function(){
  $('.tgigi').on('click', function(){
    $('#gigi').modal('show');
  });
});

$(document).ready(function(){
  $('.tkandungan').on('click', function(){
    $('#kandungan').modal('show');
  });
});

$(document).ready(function(){
  $('.tmata').on('click', function(){
    $('#mata').modal('show');
  });
});

$(document).ready(function(){
  $('.ttht').on('click', function(){
    $('#tht').modal('show');
  });
});

$(document).ready(function(){
  $('.tkulit').on('click', function(){
    $('#kulit').modal('show');
  });
});

$(document).ready(function(){
  $('.tumum').on('click', function(){
    $('#umum').modal('show');
  });
});

function logoutConfirmation() {
    var response = confirm("Apakah Anda yakin ingin logout?");
    if (response) {
      window.location.href = "logout.php";
    }
  }
</script>
</html>
