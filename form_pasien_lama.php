<?php
session_start();

if (!isset($_SESSION["login"])){
  header("location: index.php");
  exit;
}

require 'functions.php';
$tgl = date('d-m-Y');
$tgl_daftar = date('d-m-Y');
$jenis_pembayaran = query("SELECT * FROM pembayaran ORDER BY jenis_pembayaran ASC");

//cek apakah tombol daftar sudah di klik
if(isset($_POST["daftar"]) ) {

  if(pasien($_POST) > 0 ) {
    echo "<script>
              alert('Anda sudah terdaftar!');
              document.location.href = 'data_pemohon.php';
          </script>";
  } else {
    echo "<script>
              alert('Pendaftaran gagal!');
              document.location.href = 'form_pasien_lama.php';
          </script>";
  }

}


 ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PASIEN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Menyisipkan JQuery dan Javascript Bootstrap -->
    <!-- jQuery dulu, kemudian Popper.js, kemudian Bootstrap.js -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <!-- bootstrap.bundle.min.js sudah include Popper.js -->
      <script src="js/bootstrap.bundle.min.js" ></script>

      <!-- ajaxdata.php-------------------->
      <script type="text/javascript">
      $(document).ready(function(){
        $('#poli_tujuan').on('change',function(){
          var poliID = $(this).val();
          if(poliID){
            $.ajax({
              type:'POST',
              url:'ajaxdata.php',
              data:'id_poli='+poliID,
              success:function(html){
                $('#dokter').html(html);
                $('#jam').html('<option value="">pilih jam berobat</option>');
              }
          });
        }else{
          $('#dokter').html('<option value="">pilih dokter</option>');
          $('#jam').html('<option value="">pilih jam berobat</option>');
        }
      });

      $('#dokter').on('change', function(){
        var dokterID = $(this).val();
        if(dokterID){
          $.ajax({
            type:'POST',
            url:'ajaxdata.php',
            data:'id_dokter='+dokterID,
            success:function(html){
              $('#jam').html(html);
            }
          });
        }else{
          $('#jam').html('<option value="">pilih jam first</option>');
        }
      });
      });
      </script>

      <style media="screen">
        body , html{
          height: auto;
        }
        .bg {
          background-image: url("img/background.jpg");
          height: auto;
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
        }
      </style>
      </head>

      <body  class="bg mt-3">


  <!-- navibar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="">RUMAH SAKIT DAMAI ELOK HOSPITAL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Pendaftaran Online<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pasien_caradaftar.php">Cara Mendaftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pasien_jadwal_posting.php">Jadwal Dokter</a>
          </li>
      <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
    </ul>
  </div>
</div>
</nav>



    <!-- Membuat Form -->

        <div class="pt">
            <div class="container">
                <div class="row mt-3">
                  <div class="col text-center">
                    <br>
                    <br>
                    <h5>Form Pasien Lama</h5>
                  </div>
                </div>

            <div class="row">
              <div class="col ml-5 mr-5">
                <div class="card">
                    <div class="card-body">

                    <form class="" action="" method="post">
                      <div class="row">
                        <div class="col">
                          <div class="">
                            <label for=""><H6>- JENIS PASIEN - </H6></label>
                          </div>

                          <div class="form-group">
                          <input type="hidden" class="form-control" id="kode_pendaftaran" name="kode_pendaftaran" value="" placeholder="" >

                          <input type="hidden" class="form-control" id="username" name="username" value="<?php echo $_SESSION['username']; ?>" placeholder="" >

                          <label for="ttl">Tanggal berobat</label>
                          <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" value="<?php echo $tgl_daftar; ?>" required>
                          </div>

                          <div class="form-group">
                          <label for="poli_tujuan">Poli tujuan</label>
                          <?php
                            $query = $db->query("SELECT * FROM poliklinik WHERE status = 1 ORDER BY nama_poli ASC");

                            //count total of rows
                            $rowCount = $query->num_rows;
                           ?>
                          <select class="form-control" name="poli_tujuan" id="poli_tujuan" required>
                            <option value="">Pilih</option>
                            <?php
                            if($rowCount > 0){
                              while ($row = $query->fetch_assoc()) {
                                echo '<option value="'.$row['id_poli'].'">'.$row['nama_poli'].'</option>';
                              }
                            }else {
                              echo'<option value="">poli not available</option>';
                            }
                             ?>
                          </select>
                          </div>

                          <div class="form-group">
                          <label for="">Dokter</label>
                          <select class="form-control" name="dokter" id="dokter" required>
                          <option value="">Pilih</option>
                          </select>
                          </div>

                          <div class="form-group">
                          <label for="">Jam berobat</label>
                          <select class="form-control" name="jam" id="jam" required>
                          <option value="">Pilih</option>
                          </select>
                          </div>

                          <div class="form-group">
                          <label for="jenis_pasien">Jenis pembayaran</label>
                          <select class="form-control" name="jenis_pembayaran" id="jenis_pembayaran" required>
                            <option value="">Pilih</option>
                            <?php  foreach ($jenis_pembayaran as $row ) : ?>
                            <option><?= $row["jenis_pembayaran"]; ?></option>
                            <?php endforeach; ?>
                          </select>
                          <select hidden class="form-control" name="status" id="status" >
                            <option value="Proses" selected>Proses</option>
                            <option value="Terdaftar">Terdaftar</option>
                          </select>

                          </div>

                        </div>

                        <div class="col">
                          <div class="">
                            <label for=""><H6>- DATA PASIEN - </H6></label>
                          </div>

                          <div class="form-group">
                          <label for="no_rm">No Rekam medis</label>
                          <input type="text" class="form-control" id="no_rm" name="no_rm" value="" autocomplete="off" required>
                          <label class="mt-1" for="nama">Nama Pasien</label>
                          <input type="text" class="form-control" id="nama" name="nama" value="" autocomplete="off" placeholder="" required>
                          <label class="mt-1" for="nama">Jenis Kelamin</label>
                          <input type="Text" class="form-control" id="jk" name="jk" value="" autocomplete="off" placeholder="" >
                          <label class="mt-1" for="nama">Tempat lahir</label>
                          <input type="text" class="form-control" id="tlahir" name="tlahir" autocomplete="off" value="" placeholder="" >
                          </div>

                                       <div class="row">
                                        <div class="col">
                                        <div class="form-group">
                                          <label for="ttl">Tanggal lahir</label>
                                          <input type="date" class="form-control" id="ttl" name="ttl" autocomplete="off" value="" required>
                                        <input type="hidden" class="form-control" id="pekerjaan" name="pekerjaan" value="" placeholder="" >
                                        <input type="hidden" class="form-control" id="alamat" name="alamat" value="" placeholder="" >
                                        <input type="hidden" class="form-control" id="wnama" name="wnama" value="" placeholder="" >
                                        <input type="hidden" class="form-control" id="wjk" name="wjk" value="" placeholder="" >
                                        <input type="hidden" class="form-control" id="walamat" name="walamat" value="" placeholder="" >
                                        <input type="hidden" class="form-control" id="wnohp" name="wnohp" value="" placeholder="" >

                                        </div>
                                        </div>

                                        <div class="col">
                                        <div class="form-group">
                                          <label for="tlahir">No Hp</label>
                                          <input type="text" class="form-control" id="nohp" name="nohp" value="" placeholder="" required>
                                        </div>

                          <div class="form-group text-right">
                          <button type="submit" name="daftar" class="btn btn-outline-info btn-lg mt-1">DAFTAR</button>
                          <button type="submit" name="batal" class="btn btn-outline-info btn-lg mt-1"><a href="daftar.php" style="text-decoration:none" class="text-reset">BATAL</a></button>
                          </div>
                        </div>
                      </div>

                    </form>
                    <script src="admin/vendor/jquery/jquery.min.js"></script>
                    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <script>
                    		$(function() {
                    			$("#no_rm").change(function(){
                    				var no_rm = $("#no_rm").val();

                    				$.ajax({
                    					url: 'proses.php',
                    					type: 'POST',
                    					dataType: 'json',
                    					data: {
                    						'no_rm': no_rm
                    					},
                    					success: function (pasien) {
                    						$("#nama").val(pasien['nama']);
                                $("#jk").val(pasien['jk']);
                                $("#tlahir").val(pasien['tlahir']);
                    						$("#nohp").val(pasien['nohp']);
                                $("#ttl").val(pasien['ttl']);
                                $("#pekerjaan").val(pasien['pekerjaan']);
                                $("#alamat").val(pasien['alamat']);
                                $("#wnama").val(pasien['wnama']);
                    						$("#wjk").val(pasien['wjk']);
                                $("#walamat").val(pasien['walamat']);
                                $("#wnohp").val(pasien['wnohp']);

                    					}
                    				});
                    			});

                    			$("form").submit(function(){
                    				alert("Silahkan Periksa kembali setelah selesai, klik OK!");
                    			});
                    		});
                    	</script>

                    </div>
                    </div>
              </div>

            </div>




          </div>
      </div>

</div></div>

</body>

</html>
