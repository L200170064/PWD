<?php

session_start();

	if($_SESSION['status']=="admin"){

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Halaman Admin </title>
	</head>
	<body>
		<h1> Ini Halaman Admin </h1>
		<p> Hallo <?php echo $_SESSION['username']; ?> </p>
		<p> <a href="../4.logout.php"> logout </a> </p>
	</body>
</html>

<?php

}else{
	header("location: ../4.loginmultilevel.php");
}

?>