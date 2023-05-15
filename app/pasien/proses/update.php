<?php
session_start();
require_once '../../functions/MY_model.php';

$nama_pasien = $_POST['nama_pasien'];
$nomor_identitas = $_POST['nomor_identitas'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$updated_at = date('Y-m-d H:i:s');
$query = "UPDATE pasien SET nomor_identitas = '$nomor_identitas', nama_pasien = '$nama_pasien', alamat = '$alamat', no_hp = '$no_hp', jenis_kelamin = '$jenis_kelamin'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=pasien";</script>';
} else {
  echo mysqli_error($conn);
}
