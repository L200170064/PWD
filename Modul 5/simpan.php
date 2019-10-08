<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
// query SQL untuk insert data
$query="INSERT INTO mahasiswa SET nim='$nim',nama='$nama',kelas='$kelas',alamat='$alamat'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>