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
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="../js/jquery-1.11.1.min.js"></script>
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

<!-- check data  -->

<script type="text/javascript">
  	function cek(form){
    var nama  = form.nama.value;
    var pass = form.password.value;
    var pass1 = form.password1.value;
    var alamat = form.alamat.value;
    var nomor_handphone = form.nomor_handphone.value;
    var email = form.email.value;
    
    if(nama == ""){
      alert ("Nama tidak boleh kosong");
      return false;
    }

    if(email == ""){
      alert ("Username tidak boleh kosong");
      return false;
    }
    if(pass == ""){
      alert ("Password tidak boleh kosong");
      return false;
    }

    if(pass1 == ""){
      alert("Konfimasi password tidak boleh kosong");
      return false;
    }

    if(pass1 != pass){
      alert("maaf password yang anda masukkan tidak cocok");
      return false;
    }

    if(alamat == ""){
      alert ("Alamat anda tidak boleh kosong");
      return false;
    }

    if(nomor_handphone == ""){
      alert ("Nomor handphone anda tidak boleh kosong");
      return false;
    }

    return true;
  }
</script>

<!-- check data -->
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
			<h2>Registrasi Akun</h2>
			<div class="login-form-grids">
				<h5>Informasi Diri</h5>
				<form action="" method="post" onsubmit="return cek(this)">
					<input type="text" name="nama" placeholder="Nama Anda..." required=" " >
					<input type="text" name="alamat" placeholder="Alamat Anda..." required=" " >
					<input type="text" name="nomor_hp" placeholder="Nomor Handphone..." required=" " >
				

				<h6>Registrasi Login</h6>
					
					<input type="email" name="email" placeholder="Alamat Email" required=" " >
					<input type="password" name="password" id="password" placeholder="Password" required=" " >
					<input type="password" name="password1" id="password1" placeholder="Konfirmasi Password" required=" "  >
					
					<input type="submit" name="simpan" value="Daftar">
				</form>

					<?php
						include "../modul/conn.php";
							
							if(isset($_POST['simpan'])) {
								$nama = $_POST['nama'];
								$alamat= $_POST['alamat'];
								$nomor_hp = $_POST['nomor_hp'];

								$email = $_POST['email'];
								$password = $_POST['password'];

								$b=mysql_query("select * from user where role='member'");
								$jumlah_member = mysql_num_rows($b) +1;
								
								$a=mysql_query("select * from member where email='$email' or nomor_handphone='$nomor_hp'");
								$cek = mysql_num_rows($a);
								
								if($cek >=1 ) {
									echo "<script language='javascript'> alert ('Maaf, Nomor Hp & Email anda sudah terdaftar sebelumnya'); history.back(); 
											</script>";
								}
								else{
									mysql_query("insert into member values ('$jumlah_member','$nama','$alamat','$nomor_hp','$email')");
									mysql_query("insert into user values('$jumlah_member','$email','$password','member')");
									echo "<script language='javascript'> alert ('Selamat, anda telah berhasil menjadi member kami. silahkan login dengan Username & Password yang anda inputkan di form registrasi. Terima kasih'); document.location='../index.php'; </script>";
								}
							}
					?> 

			</div>
			<div class="register-home">
				<a href="../index.php">Home</a>
			</div>
		</div>
	</div>
<!-- //register -->

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