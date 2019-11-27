<?php
	session_start();

	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
	$conn = mysqli_connect("localhost","root","","informatika");

	if($_SESSION['status']=="admin"){
		header("location: admin/halaman_admin.php");
		}else if($_SESSION['status']=="member"){
			header("location: member/halaman_member.php");
	}else{

	$username = $_POST['username'];
	$password = $_POST['password'];
	$submit = $_POST['submit'];

	if($submit){
		$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$query = mysqli_query($conn, $sql);
		$cek = mysqli_num_rows($query);

		if($cek > 0){
			$row = mysqli_fetch_assoc($query);
			if($row['status'] == "admin"){
				$_SESSION['username'] = $row["username"];
				$_SESSION['status'] = "admin";
				header("location: admin/halaman_admin.php");
			}else if($row['status'] == "member"){
				$_SESSION['username'] = $row['username'];
				$_SESSION['status'] = "member";
				header("location: member/halaman_member.php");
			}
		}else{
			echo "<script>
			alert('Gagal Login');
			document.location = '4.loginmultilevel.php';
			</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Login Multilevel </title>
	</head>
	<body>
		<form method='POST' action='4.loginmultilevel.php'>
			<div align='center'>
				<p> Username : <input type='text' name='username'> </p>
				<p> Password : <input type='password' name='password'> </p>
				<p> <input type='submit' name='submit' value='Login'> </p>
			</div>
		</form>
	</body>
</html> 

<?php
}
?>