<?php
function kodeBarangOtomatis($db) {
	$query = "SELECT max(Convert(int, kode_barang)) as maxKode FROM barang";
	$hasil = mysqli_query($db,"SELECT max(kode_barang) as maxKode FROM barang");

	$data = mysqli_fetch_array($hasil);
	$kodeBarang = $data['maxKode'];
	 
	$noUrut = (int) substr($kodeBarang, 2, 3);
	$noUrut++;
	 
	$char = "BR";
	$kodeBarang = $char . sprintf("%03s", $noUrut);
	return $kodeBarang;
}
?>