<?php
session_start();
require_once '../../functions/MY_model.php';
$dokter_id = $_POST['dokter_id'];
$nama_dokter = $_POST['nama_dokter'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];
$spesialis = $_POST['spesialis'];
$created_at = date('Y-m-d H:i:s');
$query = "INSERT INTO dokter VALUES('$dokter_id', '$nama_dokter', '$alamat', '$jenis_kelamin', '$no_hp', '$spesialis', '$created_at')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=dokter";</script>';
} else {
  echo mysqli_error($conn);
}
