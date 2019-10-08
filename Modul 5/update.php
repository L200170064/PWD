<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
// query SQL untuk insert data
$query="UPDATE mahasiswa SET kelas='$kelas',alamat='$alamat' WHERE nim='$nim'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>