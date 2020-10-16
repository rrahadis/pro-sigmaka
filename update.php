<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update data_mahasiswa set nama='$nama', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>