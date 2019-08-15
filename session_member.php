<?php 
session_start();
if(!isset($_SESSION['member'])) {
		echo "<script language=\"javascript\"> alert('Maaf, Anda harus login terlebih dahulu ...'); document.location='login/login.php'; </script>";
exit;
}
?>