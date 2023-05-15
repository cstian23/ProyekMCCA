<?php
require_once 'app/functions/MY_model.php';

$obat_id = $_GET['obat_id'];
$delete = "DELETE FROM obat WHERE obat_id = '$obat_id'";

if(create($delete) != FALSE) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= '?page=obat';</script>";
} else {
  echo "<script>alert('Data Gagal Dihapus');</script>";
  echo "<script>location= '?page=obat';</script>";
}
