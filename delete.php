<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_mahasiswa   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from data_mahasiswa where id='$id_mahasiswa'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>