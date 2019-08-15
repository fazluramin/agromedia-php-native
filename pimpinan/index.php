<?php 
session_start();
if(!isset($_SESSION['pimpinan'])) {
		echo "<script langguage=\"javascript\"> alert('Maaf, Anda harus login terlebih dahulu ...'); document.location='../login/login.php'; </script>";
exit;
}
?>