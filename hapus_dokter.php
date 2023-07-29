// hapus_dokter.php
<?php
require 'functions.php';

if (isset($_GET["id_dokter"])) {
  $id_dokter = $_GET["id_dokter"];

  if (hapus_dokter($id_dokter) > 0) {
    echo "
      <script>
        alert('Data dokter berhasil dihapus!');
        document.location.href = 'jadwal_dokter.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data dokter gagal dihapus!');
        document.location.href = 'jadwal_dokter.php';
      </script>
    ";
  }
} else {
  echo "
    <script>
      alert('ID Dokter tidak ditemukan!');
      document.location.href = 'jadwal_dokter.php';
    </script>
  ";
}
?>
