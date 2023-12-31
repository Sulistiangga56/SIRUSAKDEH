<?php
require 'functions.php';

//ambil data dari table Loker
$jadwal = query("SELECT * FROM jadwal ORDER BY poli ASC");
session_start();

//tombol cari ditekan
if (isset($_POST["cari"]) ) {
  $jadwal = cari($_POST["keyword"]);
}

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jadwal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- jQuery dulu, kemudian Popper.js, kemudian Bootstrap.js -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <!-- bootstrap.bundle.min.js sudah include Popper.js -->
      <script src="js/bootstrap.bundle.min.js" ></script>

</head>

<body background="img/backgroundps.jpg" class="mt-3">

  <!-- navibar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
  <a class="navbar-brand" href="index.php">RUMAH SAKIT DAMAI ELOK HOSPITAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="daftar.php">Pendaftaran Online<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="caradaftar.php">Cara Mendaftar</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="jadwal.php">Jadwal Dokter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">kontak</a>
      </li>
    </ul>
  </div>
</div>
</nav>


    <!-- Membuat komponen jadwal -->

        <div class="pt-5">
            <div class="container">
                  <div class="row">
                  <div class="col text-center">
                    <h5>Jadwal Dokter pada Poli</h5>
              </div>
              </div>

              <br>

              <div class="row">
                <div class="col pb-2 md">
                  <div class="">
                    <table class="table table-sm table-borderless">
                      <form  action="" method="post">
                      <tr>

                        <td width="40">Dokter</td>

                        <td width="380">
                          <select class="form-control" name="keyword" id="">
                            <option value="">Pilih</option>
                          <?php  foreach ($jadwal as $row ) : ?>
                          <option><?= $row["dokter"]; ?></option>
                          <?php endforeach; ?>
                        </select></td>

                        <td width="40">Poli</td>
                        <td width="250"><select class="form-control" name="keyword" id="">
                          <option value="pilih">Pilih</option>
                          <option value="wanita">Anak</option>
                          <option value="pria">Umum</option>
                        </select></td>


                        <td><button type="submit" name="cari" class="btn btn-primary">Cari</button></td>
                      </tr>
                    </form>
                  </table>

                  </div>
                </div>
                </div>

        <div class="row">
                <div class="col md">
                  <div class="card" style="width: 70rem;">
                  <div class="card-body">

                    <table class="table table-sm table-bordered">
                      <thead>
                      <tr>
                        <th width="230">Dokter</th>
                        <th width="40">Poli</th>
                        <th class="text-center">Senin</th>
                        <th class="text-center">Selasa</th>
                        <th class="text-center">Rabu</th>
                        <th class="text-center">Kamis</th>
                        <th class="text-center">Jumat</th>
                        <th class="text-center">Sabtu</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php  foreach ($jadwal as $row ) : ?>

                             <tr>
                               <td><?= $row["dokter"]; ?></td>
                               <td ><?= $row["poli"]; ?></td>
                               <td><?= $row["senin"]; ?></td>
                               <td><?= $row["selasa"]; ?></td>
                               <td><?= $row["rabu"]; ?></td>
                               <td><?= $row["kamis"]; ?></td>
                               <td><?= $row["jumat"]; ?></td>
                               <td><?= $row["sabtu"]; ?></td>
                             </tr>
                           <?php endforeach; ?>
                      </tbody>

                    </table>

                  </div>
                </div>
                </div>
              </div>


                </div>
              </div>
              </div>


<script src="js/script.js">

</script>
</body>

</html>
