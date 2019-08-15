<?php
session_start();
include "../modul/conn.php";

mysql_query("delete from penjualan where id_transaksi='$_GET[id_transaksi]'");
echo "<script language='javascript'> alert ('Transaksi berhasil di hapus....'); document.location='index_admin.php'; </script>";//index_admin.php
?>