<?php

session_start();

	if($_SESSION['status']=="member"){

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Halaman Member </title>
	</head>
	<body>
		<h1> Ini Halaman Member </h1>
		<p> Hello <?php echo $_SESSION['username']; ?> </p>
		<p> <a href="../4.logout.php"> logout </a> </p>
	</body>
</html>

<?php

}else{
	header("location: ../4.loginmultilevel.php");
}

?>