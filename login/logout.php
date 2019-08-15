<?php
session_start();
	unset($_SESSION['member']);
	unset($_SESSION['penjual']);
	unset($_SESSION['admin']);
	unset($_SESSION['type']);
	session_destroy();
		echo "<script langguage=\"javascript\"> alert ('Logged Out '); document.location='../index.php'; </script>";
	?>