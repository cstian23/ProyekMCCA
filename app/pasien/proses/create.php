<?php
session_start();
require_once '../../functions/MY_model.php';
$pasien_id = $_POST['pasien_id'];
$nama_pasien = $_POST['nama_pasien'];
$nomor_identitas = $_POST['nomor_identitas'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$created_at = date('Y-m-d H:i:s');
$query = "INSERT INTO pasien VALUES('$pasien_id', '$nomor_identitas', '$nama_pasien', '$jenis_kelamin',  '$alamat', '$no_hp', '$created_at')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=pasien";</script>';
} else {
  echo mysqli_error($conn);
}
