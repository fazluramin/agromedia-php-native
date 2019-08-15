<?php
include "modul/conn.php";
include "session_member.php";

$id_produk = $_POST['id_produk'];
$id_login = $_POST['id_login'];


$date = date("Y-m-d");

//untuk kode unik belanja
function acak($panjang){
	$karakter='123456789';
	$string='';
	for($i=0; $i<$panjang; $i++){
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}
$kode_unik=acak(3);

mysql_query("insert into penjualan values ('','$id_login','$id_produk','1','$date','cart','','')");
##$a=mysql_query("select * from penjualan where id_pembeli='$id_login' and status='progress'");
echo "<script language='javascript'> alert('Produk pesanan anda telah masuk ke chart, silahkan buka menu chart anda'); document.location='index.php'; </script>";
?>