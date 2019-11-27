<?php
	session_start();
	session_destroy();
?>

<script>
	alert ('Anda telah logout');
	document.location='4.loginmultilevel.php';
</script>