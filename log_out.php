<?php

	include 'connect.php';
	session_start(0);

	if(isset($_POST['submit'])){
		session_destroy();
		header('location:index.php');
	}

?>
