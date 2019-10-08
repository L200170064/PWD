<!DOCTYPE html>
<html>
    <head>
        <title>Mahasiswa</title>
    </head>
    <body>
	<table border='1'>
		<tr>
			<td>
				<a href='index.php'><b> Home </b></a>
			</td>
		</tr>
	</table>
	<h2> Tambah Data Mahasiswa </h2>
        <form method="post" action="simpan.php">
            <table border='0'>
                <tr>
					<td>Nim</td>
					<td>:</td>
					<td><input type="text" name="nim"></td>
				</tr>
                <tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td></tr>
                <tr>
					<td>Kelas</td>
					<td>:</td>
					<td>
						<input type="radio" name="kelas" checked value="A">A
                        <input type="radio" name="kelas" value="B">B
						<input type="radio" name="kelas" value="C">C
					</td>	
                </tr>
                <tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat"></td>
				</tr>
                <tr>
					<td colspan="2">
						<button type="submit" value="submit">Submit</button>
					</td>
				</tr>
            </table>
        </form>
    </body>
</html>