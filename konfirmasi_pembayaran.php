<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Agromedia Group</title>
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
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="../index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Daftar Akun</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">

			<div class="col-md-12">
			<h2>Konfirmasi Pembayaran</h2>
			<div class="col-md-12"></div>
			<div class="clearfix"></div>

			<?php function tabel(){ ?>
				<div class="col-md-12">
					<table class="table table-bordered">
						<thead>
							<tr class="info">
								<th scope="row" style="text-align: center;">No.</th>
								<th style="text-align: center;">Nama Pengirim</th>
								<th style="text-align: center;">Total Harga</th>
								<th style="text-align: center;">Diskon</th>
								<th style="text-align: center;">Total Bayar</th>
								<th style="text-align: center;">Rekening Tujuan</th>
								<th style="text-align: center;">Foto Bukti Transfer</th>
								<th style="text-align: center;">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
								$id=$_SESSION['tipe'];

								$sql_grab="SELECT sum(stok_buku.harga * penjualan.jumlah) as jumlah, penjualan.id_rekening  from penjualan,stok_buku where penjualan.id_produk=stok_buku.id_produk and penjualan.id_pembeli='$_SESSION[id]' and penjualan.status='konfirmasi_pembayaran'";
								$grab=mysql_query($sql_grab);
								$take=mysql_fetch_array($grab);
								$pengiriman=40000;
								
								$sql_rek="select id_rekening, nomor_rekening, atas_nama, nama_bank from rekening";
								$rek=mysql_query("sql_rek");
								$id_rekening=$rek[0];
								$no_rek=$rek[1];
								$nm=$rek[2];
								$bank=$rek[3];

								if($id=='b2b'){
									$diskon=20;
								}
								else{
									$diskon=0;
								}

								$total_diskon=($take['jumlah'])*($diskon/100);
								$total= ($take['jumlah']  - $total_diskon + $pengiriman);

								if ($take['jumlah']==""){

									echo "<tr>
											<td colspan='8' style='text-align: center;'> - - - - - - Tidak Ada Data - - - - - - </td>
										  </tr>
									";
								}
								else{
									echo"
										<tr>
										<form method='post' action ='konfirmasi_pembayaran.php?aksi=confirm' enctype='multipart/form-data'>
											<td style='text-align: center;'>1.</td>
											<td style='text-align: center;'>
												<input type='text' name='pengirim' placeholder='Nama rekening pengirim' required>
											</td>
											<th style='text-align: center;'>".number_format($take['jumlah'])."</th>
											<th style='text-align: center;'>".$diskon."%</th>
											<th style='text-align: center;'>".number_format($total)."</th>
											<td style='text-align: center;'>
												<select name='rek'>
													<option value=''>Rekening Tujuan</option>
                                              		<option value=''>==============</option>
                                          ";
                                          
                                              		$sql_rek="select id_rekening, nomor_rekening, atas_nama, nama_bank from rekening";
													$rek=mysql_query("$sql_rek");
													echo $sql_rek;
													while($b=mysql_fetch_array($rek)){
														$id_rekening=$b[0];
														$no_rek=$b[1];
														$nm=$b[2];
														$bank=$b[3];

														echo "<option value='$b[0]'>$b[1] | $b[3]</option>";
													}
									echo "		
											</select>
											</td>
											<td style='text-align: center;'>
												<input type='file' name='trf'>
											</td>
											<td style='text-align: center;'>
												<input type='submit' class='btn btn-warning btn-md' name='konfirmasi' value='Konfirmasi'>
											</td>
										</tr>
										</form>
										";

									}
								?>
						</tbody>
					</table>
				</div>

					

				</div>
				</div>
			</div>
		</div>
	</div>
					<?php }

		function confirm() {  

			if(isset($_POST['konfirmasi'])){

				$nama_pengirim = $_POST['pengirim'];
				$id_pengirim = $_SESSION['id'];
				$tanggal = date("Y-m-d");
				$id_rek= $_POST['rek'];
				
				$foto = $_FILES['trf']['tmp_name'];
				
                      $nm_foto = md5($foto).".png";
                          copy($foto,"images/bukti/" . $nm_foto);

                $sql=mysql_query("select id_transaksi from penjualan where id_pembeli='$id_pengirim' and status='konfirmasi_pembayaran'");
	  			while($b=mysql_fetch_array($sql)) {

	  				mysql_query("update penjualan set id_rekening='$id_rek' where id_pembeli='$id_pengirim' and status='konfirmasi_pembayaran'");
	  				mysql_query("insert into bukti_trf values('','$tanggal','$id_pengirim','$b[0]','$nama_pengirim','$nm_foto')");

	  			}
	  			mysql_query("update penjualan set status='konfirmasi_admin' where id_pembeli='$id_pengirim' and status='konfirmasi_pembayaran'");
				echo "<script language='javascript'> alert('Terimakasih, Pembelian anda sedang kami proses. '); document.location='index.php'; </script>";
			}

		}		
		?>

<!-- //register -->

<?php
	if (isset($_GET['aksi'])){
              switch($_GET['aksi']){
                case "confirm":
                	confirm();
                	tabel();
                	
                  break;
                default:
                  echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
                  tambah();
                  tampil_data();
              }
            } else {
            	tabel();
            }

        ?>

	<?php
		include "footer.php";
	?>	

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
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
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