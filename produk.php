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
<meta name="keywords" content="Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.css">
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
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Produk</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- products -->
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Katalog Buku</h2>
					<ul class="cate">
						<?php
								$a = mysql_query("select distinct(kategori) from k_buku order by kategori asc");
							  	while($b=mysql_fetch_array($a)) 
							  	{
							  		echo "
							  			<li><a href='produk.php?kategori=$b[0]'>
							  			<i class='fa fa-arrow-right' aria-hidden='true'></i>".ucwords(str_replace("_"," ",$b[0]))."</a>";
							  	}
						?>
					</ul>
				</div>																																												
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">
						<h2>Produk Buku Tersedia :</h2>
						
					</div>
				</div>

					<?php 
						$no = 0;
						if(isset($_GET['kategori'])){
							$kategori=$_GET['kategori'];
							
							$sql_a=mysql_query("select kategori, id_kategori from k_buku where kategori='$kategori'");
							$sql_b=mysql_fetch_array($sql_a);
							$kat=$sql_b[0];
							$id_kat=$sql_b[1];

							$sql=mysql_query("select id_produk,nama_produk,harga,photo,kategori,keterangan,stok_buku from stok_buku where kategori='".$id_kat."'");
						}
						elseif (isset($_POST['btn_cari'])) {
							$key=$_POST['cari'];
							$sql=mysql_query("select id_produk,nama_produk,harga,photo,kategori,keterangan,stok_buku from stok_buku where nama_produk like '%$key%'");
						}
						else{
						$sql = mysql_query('select id_produk,nama_produk,harga,photo,kategori,keterangan,stok_buku from stok_buku');
						}
						while($b=mysql_fetch_array($sql)){
							$no=$no+1;
							$string=$b[5];
								list($penulis, $halaman, $tgl_terbit, $isbn, $bahasa, $berat) = explode("|", $string);

					?>

					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<!--<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>-->
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="keterangan_produk.php?id=<?php echo $b[0];?>">
													<img src="images/buku/<?php echo $b[3]; ?>" width="40%" height="40%"></a>

												<p><?php echo $b[1];?></p>
												<h4><?php echo $b[2];?></span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="keterangan_produk.php?id=<?php echo $b[0];?>" method="post">
														<input type="submit" name="submit" value="Lihat Detail" class="button">
												</form>

											</div>								
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
						
						<?php
						$hitung = mysql_num_rows($a);
						$bagi = $hitung / 3;
						$bagi = round($bagi,6);
						for($i=0; $i<=$bagi; $i++) { 
							$n = $i*3;
								if( $n == 0){
									continue;
								}
								if($n>=$hitung){
									break;
								}
							if($no == $n){
								echo " <div class='clearfix'> </div> ";
							}
						
					 		} //tutup for
					 	
					 	} //tutup while
					 	
					?>
						

				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- products -->
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