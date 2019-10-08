<html>
    <head>
        <title> MAHASISWA </title>
    </head>
    <body>
	<table border='1'>
		<tr>
			<td>
				<a href='form.php'><b> Tambah Data Mahasiswa </b></a>
			</td>
		</tr>
	</table>
    <h2> Data Mahasiswa </h2>
        <table border="2">
            <tr><th>Nim</th><th>Nama</th><th>Kelas</th><th>Alamat</th><th colspan='2'>Action</th></tr>
            <?php
            include 'koneksi.php';
            $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
			foreach($mahasiswa as $data){				
				echo "<tr align='center'>
					<td>" . $data['nim'] . "</td>
					<td>" . $data['nama'] . "</td>
					<td>" . $data['kelas'] . "</td>
					<td>" . $data['alamat'] . "</td>
					<td>
						<a href='form-edit.php?nim=$data[nim]'>Edit</a>
					</td>	
					<td>	
						<a href='delete.php?nim=$data[nim]'>Delete</a>
					</td>
				</tr>";
			}
            ?>
		</table>
    </body>
</html>