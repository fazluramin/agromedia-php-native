<?php
session_start();
include "../modul/conn.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	$a=mysql_query("select email,id,role from user where email='$email' and password='$password'");
	$cek = mysql_num_rows($a);

	if($cek==1) {
		while($b=mysql_fetch_array($a)) {
			$_SESSION['email'] = $b[0];
			$_SESSION['id'] = $b[1];
			$_SESSION['tipe'] = $b[2];
		}

		$tipe_login = $_SESSION['tipe'];
			if($tipe_login=="member" or $tipe_login=="b2b") {
				$_SESSION['member'] = $email;
				echo "<script language='javascript'> alert('Selamat Datang...'); document.location='../index.php'; </script>";
				}
			elseif($tipe_login == "pimpinan") {
				$_SESSION['pimpinan'] = $email;
				echo "<script language='javascript'> alert('Selamat Datang Pimpinan...'); document.location='../pimpinan/laporan_buku.php'; </script>";
				}
			elseif($tipe_login == "admin"){
				$_SESSION['admin'] = $email;
				echo "<script language='javascript'> alert('Selamat Datang Admin...'); document.location='../admin/index_admin.php'; </script>";
				}
	}else{
		echo "<script language='javascript'> alert('Maaf, Username & Password yang anda masukkan Salah... Silahkan periksa kembali. Terima kasih'); history.back(); </script>";
	}	
?>