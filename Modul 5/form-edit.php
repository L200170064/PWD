<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'");
$data = mysqli_fetch_array($mahasiswa);
// membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Edit Data Mahasiswa </title>
    </head>
    <body>
	<table border='1'>
		<tr>
			<td>
				<a href='index.php'><b> Home </b></a>
			</td>
		</tr>
	</table>
	<h2> Edit Data Mahasiswa </h2>
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $data['nim'];?>" name="nim">
            <table>
                <tr>
					<td>Kelas</td>
					<td>
                        <input type="radio" name="kelas" value="A" <?php echo active_radio_button("A", $data['kelas'])?>>A
                        <input type="radio" name="kelas" value="B" <?php echo active_radio_button("B", $data['kelas'])?>>B
						<input type="radio" name="kelas" value="C" <?php echo active_radio_button("C", $data['kelas'])?>>C
					</td>
				</tr>
                <tr>
					<td>ALAMAT</td>
					<td><input value="<?php echo $data['alamat'];?>" type="text" name="alamat"></td>
				</tr>
                <tr>
					<td colspan="2">
						<button type="submit" value="simpan"> Simpan </button>
					</td>
				</tr>
            </table>
        </form>
    </body>
</html>