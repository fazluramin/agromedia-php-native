<?php 
session_start();
if(!isset($_SESSION['admin'])) {
		echo "<script langguage=\"javascript\"> alert('Maaf, Anda harus login terlebih dahulu $_SESSION[id_user] ...'); document.location='../../login/'; </script>";
exit;
}
?>