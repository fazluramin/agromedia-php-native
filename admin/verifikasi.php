<?php
include "../modul/conn.php";
include "session_admin.php";
mysql_query("update penjualan set status='finish' where id_transaksi='$_GET[id_transaksi]'");
	echo "<script language='javascript'> alert('Verifikasi Berhasil....'); document.location='index_admin.php'; </script>";
?>