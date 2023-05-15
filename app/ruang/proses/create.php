<?php
session_start();
require_once '../../functions/MY_model.php';
$ruang_id = $_POST['ruang_id'];
$nama_ruang = $_POST['nama_ruang'];
$keterangan = $_POST['keterangan'];
$query = "INSERT INTO ruang VALUES('$ruang_id', '$nama_ruang', '$keterangan', '')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=ruang";</script>';
} else {
  echo mysqli_error($conn);
}
