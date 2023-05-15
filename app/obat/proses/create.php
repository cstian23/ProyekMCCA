<?php
session_start();
require_once '../../functions/MY_model.php';
$obat_id = $_POST['obat_id'];
$nama_obat = $_POST['nama_obat'];
$keterangan = $_POST['keterangan'];
$created_at = date('Y-m-d H:i:s');
$query = "INSERT INTO obat VALUES('$obat_id', '$nama_obat', '$keterangan', '$created_at')";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=obat";</script>';
} else {
  echo mysqli_error($conn);
}
