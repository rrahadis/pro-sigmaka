<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
// query SQL untuk insert data
$query="INSERT INTO data_mahasiswa SET nama='$nama',alamat='$alamat'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>