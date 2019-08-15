<!DOCTYPE html>

<?php
	session_start();
	include "modul/conn.php";

?>

<html>
<head>
<title>Agromedia Group</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
<!-- header -->
	<?php
		include "header.php";
	?>
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Keterangan Produk</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="products">
		<div class="container">
			
				<?php
								$a=mysql_query("select id_produk,
												nama_produk,
												harga,
												photo,
												kategori,
												keterangan,
												stok_buku from stok_buku where id_produk='$_GET[id]'");
								
								$b=mysql_fetch_array($a);
								
								$id_produk=$b[0];

								$string=$b[5];
								list($penulis, $halaman, $tgl_terbit, $isbn, $bahasa, $penerbit, $berat, $deskripsi) = explode("|", $string);
				echo "
				<div class='agileinfo_single'>
				<div class='col-md-4 agileinfo_single_left'>
					<img id='example' src='images/buku/$b[3]' alt=' ' class='img-responsive center-block'>
				</div>

				<div class='col-md-8 agileinfo_single_right'>

				<h2>$b[1]</h2>
					<div class='w3agile_description'>
						<h4>Deskripsi Buku :</h4>
						<p>$deskripsi</p>
					</div>
					<div class='snipcart-item block'>
						<div class='snipcart-thumb agileinfo_single_right_snipcart'>
							<table class='table table-hover'>
								<thead>
									<tr>
								</thead>
								<tbody>
									<tr>
										<td><h4 class='m-sing'>Penulis</h4></td>
										<td>$penulis</td>
									</tr>
									<tr>
										<td><h4 class='m-sing'>Penerbit</h4></td>
										<td>$penerbit</td>
									</tr>
									<tr>
										<td><h4 class='m-sing'>Jumlah halaman</h4></td>
										<td>$halaman Halaman</td>
									</tr>
									<tr>
										<td><h4 class='m-sing'>Tanggal Terbit</h4></td>
										<td>$tgl_terbit</td>
									</tr>
									<tr>
										<td><h4 class='m-sing'>No. ISBN </h4></td>
										<td>$isbn</td>
									</tr>

									<tr>
										<td><h4 class='m-sing'>Bahasa </h4></td>
										<td>$bahasa</td>
									</tr>

									<tr>
										<td><h4 class='m-sing'>Berat Net.</h4></td>
										<td>$berat</td>
									</tr>

									<tr>
										<td><h4 class='m-sing'>Stok Tersedia</h4></td>
										<td><h4 style='float:left; font-size:20px;'>$b[6]</h4></td>
									</tr>
								</tbody>
							</table>

							<h3 class='m-sing'>Harga :   Rp. ".number_format($b[2])."</h3>

						</div>
								"
						;

					?>

						<div class='snipcart-details agileinfo_single_right_details'>
								<form action='simpan_cart.php' method='post'>
									<input type='hidden' name='id_login' value='<?php echo $_SESSION['id']; ?>'>
									<input type='hidden' name='id_produk' value='<?php echo $_GET['id']; ?>'>

									<input type='submit' name='submit' value='Tambah ke Troli' class='button'>

								</form>

						</div>

					</div>
					</div>
					
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- new -->
	<?php
		include "produk_terbaru.php";
	?>
<!-- //new -->
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