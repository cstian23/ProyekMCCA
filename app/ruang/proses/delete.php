<?php
require_once 'app/functions/MY_model.php';

$ruang_id = $_GET['ruang_id'];
$delete = "DELETE FROM ruang WHERE ruang_id = '$ruang_id'";

if(create($delete) != FALSE) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= '?page=ruang';</script>";
} else {
  echo "<script>alert('Data Gagal Dihapus');</script>";
  echo "<script>location= '?page=ruang';</script>";
}
