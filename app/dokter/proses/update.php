<?php
session_start();
require_once '../../functions/MY_model.php';

$dokter_id = $_POST['dokter_id'];
$nama_dokter = $_POST['nama_dokter'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$spesialis = $_POST['spesialis'];
$query = "UPDATE dokter SET nama_dokter = '$nama_dokter', alamat = '$alamat', no_hp = '$no_hp', spesialis = '$spesialis' WHERE dokter_id = '$dokter_id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=dokter";</script>';
} else {
  echo mysqli_error($conn);
}
