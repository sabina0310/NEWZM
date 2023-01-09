<?php
$koneksi = mysqli_connect("localhost","root","","portal_berita");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>
