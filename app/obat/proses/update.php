<?php
session_start();
require_once '../../functions/MY_model.php';

$obat_id = $_POST['obat_id'];
$nama_obat = $_POST['nama_obat'];
$keterangan = $_POST['keterangan'];
$query = "UPDATE obat SET nama_obat = '$nama_obat', keterangan = '$keterangan' WHERE obat_id = '$obat_id'";
if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=obat";</script>';
} else {
  echo mysqli_error($conn);
}
