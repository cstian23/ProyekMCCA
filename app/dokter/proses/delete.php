<?php
require_once 'app/functions/MY_model.php';

$dokter_id = $_GET['dokter_id'];
$delete = "DELETE FROM dokter WHERE dokter_id = '$dokter_id'";

if(create($delete) != FALSE) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= '?page=dokter';</script>";
} else {
  echo "<script>alert('Data Gagal Dihapus');</script>";
  echo "<script>location= '?page=dokter';</script>";
}
