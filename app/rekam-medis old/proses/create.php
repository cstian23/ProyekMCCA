<?php
session_start();
require_once '../../functions/MY_model.php';
$rm_obat_id = $_POST['rm_obat_id'];
$rm_id = $_POST['rm_id'];
$pasien_id = $_POST['pasien_id'];
$dokter_id = $_POST['dokter_id'];
$ruang_id = $_POST['ruang_id'];
$keluhan = $_POST['keluhan'];
$diagnosa = $_POST['diagnosa'];
$tanggal = $_POST['tanggal'];
$obat_id = $_POST['obat_id'];
$created_at = date('Y-m-d H:i:s');
$query = "INSERT INTO rekam_medis VALUES('$rm_id', '$pasien_id', '$dokter_id',  '$ruang_id', '$keluhan', '$diagnosa', '$tanggal', '$created_at')";
if (create($query) === 1) {
  $rm_id = mysqli_insert_id($conn);
  foreach ($obat_id as $obat) {
    $save_rmobat = "INSERT INTO rm_obat VALUES('$rm_obat_id', '$obat', '$rm_id')";
    if (create($save_rmobat) > 0) {
    } else {
      echo mysqli_error($conn);
    }
    echo '<script>document.location.href="../../../?page=rekam-medis";</script>';
  }
} else {
  echo mysqli_error($conn);
}
