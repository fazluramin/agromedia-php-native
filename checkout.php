<!DOCTYPE html>

<?php
	
	include "session_member.php";
	include "modul/conn.php";

?>

<html>
<head>
<title>Agromedia</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>

	<?php
		include "header.php";
	?>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	<?php 
	function tabel_atas(){ ?>

	<div class="checkout">
		<div class="container">

			<h2>Keranjang Belanja Anda Berisi: 
				<span>
					<?php	
				
						include "modul/conn.php";

						if(isset($_SESSION['member'])) {
							$jum = mysql_query("select * from penjualan where id_pembeli='$_SESSION[id]' and status='cart'");
							$jumlah_cart = mysql_num_rows($jum);
					
								echo "$jumlah_cart Produk";
						}
												

						else {}
					?>
				</span></h2>
			<form method="post" action="checkout.php?aksi=bayar">
			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<!--<th>No.</th>-->
							<th>Produk</th>
							<th>Jumlah</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Hapus</th>
						</tr>
					</thead>
					<tr class="rem1">
						<!--<td class="invert">1</td>-->
						<?php
						$sql=mysql_query("	select 
											stok_buku.nama_produk, 
											stok_buku.harga,
											stok_buku.photo,
											stok_buku.kategori,
											stok_buku.keterangan,
											stok_buku.stok_buku,
											
											penjualan.id_transaksi, 
											penjualan.id_produk, 
											penjualan.jumlah 
											
											from penjualan, stok_buku

											where penjualan.id_pembeli='$_SESSION[id]' 
											and penjualan.status='cart' 
											and stok_buku.id_produk=penjualan.id_produk
										");	
							
						while ($b=mysql_fetch_array($sql)){
							
						$nama_produk=$b[0];
						$harga=$b[1];
						$foto=$b[2];
						$kategori=$b[3];
						
						$keterangan=$b[4];
							list($penulis, $halaman, $tgl_terbit, $isbn, $bahasa, $penerbit, $berat, $deskripsi)=explode("|", $keterangan);
						
						$stok=$b[5];
						$id_transaksi=$b[6];
						$id_produk=$b[7];
						$jumlah=$b[8];

					?>
						<td class="invert-image">
							<img src="images/buku/<?php echo $foto; ?>" alt=" " class="img-responsive center-block" height="80px" width="80px"/></a>
						</td>
						<td class="invert">
							<div class="quantity"> 
								<div class="quantity-select">                           
									<input type="number" name="jumlah[]" min="1" max="<?php echo $stok;?>" value="<?php echo $jumlah ;?>" style="text-align: center; font-size: 16px;">
								</div>
							</div>
						</td>
						<td class="invert"><?php echo '<b>'.$nama_produk.'</b><br><i>'.$penulis.'</i>'; ?></td>
						
						<td class="invert">
							<div id="harga_barang">
								<?php echo '<b>Rp. '.number_format($harga).'</b>'; ?>
							</div>
						</td>
						<td class="invert">
							<div class="rem">

									<input type="hidden" name="id_transaksi" value="<?php echo $id_transaksi;?>">
									<input type="hidden" name="id_produk[]" value="<?php echo $id_produk;?>">
									<input type="hidden" name="id_pembeli" value="<?php echo $_SESSION['id'];?>">

									<a class='btn btn-warning btn-xs hvr-icon-float-away' href='checkout.php?aksi=hapus&id_transaksi=<?php echo $id_transaksi;?>'>
									<i class='fa fa-trash'></i>Hapus Item</a>
							</div>
						</td>
					</tr>
					<?php  } ?>
				</table>
			</div>
			<?php }

		function tabel_bawah(){?>
				<div class="checkout-right-basket">
					<input type="submit" name="proses_checkout" value="Lanjut Bayar" class="btn btn-warning btn-lg">
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
		</form>
		<?php } 

		function tabel_bawah_baru(){

				if(isset($_POST['proses_checkout'])){

						$id_pembeli = $_POST['id_pembeli'];
						$jumlah = $_POST['jumlah'];
						$tanggal = date("Y-m-d");
						$id=$_POST['id_transaksi'];
						$id_produk=$_POST['id_produk'];
						$role=$_SESSION['tipe'];

						$hitung = count($id_produk)-1;
							for($i=0; $i<=$hitung; $i++) {

								//insert data
								$sql_insert="INSERT into penjualan values 
											('','$_SESSION[id]','$id_produk[$i]','$jumlah[$i]','$tanggal','konfirmasi_pembayaran','','$role')";
								$insert=mysql_query($sql_insert);
								
								//delete status cart
								$hapus=mysql_query("delete from penjualan where id_pembeli='$_SESSION[id]' and status='cart'");

								//update stok terakhir
								$a=mysql_query("select stok_buku from stok_buku where id_produk='$id_produk[$i]'");
								$b=mysql_fetch_array($a);
								$stok=$b[0];
								$jumlah_new=$stok-$jumlah[$i];

								$update="stok_buku='".$jumlah_new."'";
								$sql_update="UPDATE stok_buku SET ".$update." WHERE id_produk=".$id_produk[$i]."";

								$exe=mysql_query($sql_update);
		         			}
		         		echo "<script language='javascript'> alert ('Transaksi Berhasil, Silakan Lanjut Konfirmasi Pembayaran ....'); document.location='#'; </script>";
		                
		                
		         }    	          
		?>
			<?php 
				$sql_grab="SELECT sum(stok_buku.harga * penjualan.jumlah) as jumlah from penjualan,stok_buku where penjualan.id_produk=stok_buku.id_produk and penjualan.id_pembeli='$_SESSION[id]' and penjualan.status='konfirmasi_pembayaran'";
				$grab=mysql_query($sql_grab);
				$take=mysql_fetch_array($grab);
				$pengiriman=40000;
				$total= $take['jumlah'] + $pengiriman ;

			?>

			<div class="checkout-left">	
				<div class="checkout-left-basket">
					<h4>Total Belanja</h4>
					<ul>
						<li>Total Belanja di Troli 
							<span><div id="total-belanja"><b>Rp. <?php echo number_format($take['jumlah']);?></b></div></span>
						</li>
						<li>Biaya Pengiriman 
							<span><div id="biaya-kirim"><b>Rp. <?php echo number_format($pengiriman);?></b></div></span>
						</li>
						<li>Total Bayar
							<span><div id="total-bayar"><b>Rp. <?php echo number_format($total);?></b></div></span>
						</li>
					</ul>	
				</div>
			</div>

				<div class="checkout-right-basket">
					<a href="konfirmasi_pembayaran.php"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Konfirmasi Pembayaran</a>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
		<?php } ?>

	

	


	<?php function hapus(){

              if(isset($_GET['id_transaksi']) && isset($_GET['aksi'])){
                $id = $_GET['id_transaksi'];
                $sql_hapus = "DELETE FROM penjualan WHERE id_transaksi=". $id;

                $hapus = mysql_query($sql_hapus);
                echo "<script language='javascript'> alert ('Item berhasil dihapus ....'); document.location='checkout.php'; </script>";
                
                if($hapus){
                  if($_GET['aksi'] == 'hapus'){
                    header('location: checkout.php');
                  }
                }
              }    
          }
    ?>

	<?php
	if (isset($_GET['aksi'])){
              switch($_GET['aksi']){
                case "bayar":
                  tabel_atas();
                  tabel_bawah_baru();
                  break;
                case "hapus":
                  hapus();
                  tabel_atas();
              	  tabel_bawah();
                  break;

                default:
                  echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
                  tambah();
                  tampil_data();
              }
            } else {
              tabel_atas();
              tabel_bawah();
            }

        ?>
<!-- //checkout -->
<!-- //footer -->
	<?php
		include "footer.php";
	?>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script  src="js/index.js"></script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 

</body>
</html>