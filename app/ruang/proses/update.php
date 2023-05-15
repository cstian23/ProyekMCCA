<?php
session_start();
require_once '../../functions/MY_model.php';

$ruang_id = $_POST['ruang_id'];
$nama_ruang = $_POST['nama_ruang'];
$keterangan = $_POST['keterangan'];
$query = "UPDATE ruang SET nama_ruang = '$nama_ruang', keterangan = '$keterangan', updated_at = '$updated_at', updated_by = '$updated_by' WHERE ruang_id = '$ruang_id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=ruang";</script>';
} else {
  echo mysqli_error($conn);
}
