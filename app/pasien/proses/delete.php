<?php
require_once 'app/functions/MY_model.php';

$pasien_id = $_GET['pasien_id'];
$delete = "DELETE FROM pasien WHERE pasien_id = '$pasien_id'";

if(create($delete) != FALSE) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= '?page=pasien';</script>";
} else {
  echo "<script>alert('Data Gagal Dihapus');</script>";
  echo "<script>location= '?page=pasien';</script>";
}
