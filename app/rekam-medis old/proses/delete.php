<?php
require_once 'app/functions/MY_model.php';

$rm_id = $_GET['rm_id'];
$delete = "DELETE FROM rekam_medis WHERE rm_id = '$rm_id'";

if(create($delete) != FALSE) {
  echo "<script>alert('Data Berhasil Dihapus');</script>";
  echo "<script>location= '?page=rekam-medis';</script>";
} else {
  echo mysqli_error($conn);
}
