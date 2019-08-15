<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>Temukan Buku Terbaru Rekomendasi Kami . <a href="../produk.php">LIHAT PRODUK</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<?php	
						if(isset($_SESSION['member']) || isset($_SESSION['b2b']) ) {		
							echo "					
								<li><a href='../faq.php'>Bantuan</a></li>
								";
						}
												
						else {
							echo "
								<li><a href='../registrasi/register.php'> Daftar Akun</a></li>
								<li><a href='login.php'>Login</a></li>
								<li><a href='../faq.php'>Bantuan</a></li>
							";
						}
				?>


					
					<li>
						<a href="javascript:void(0);" id="jwpopupLink">Cara Transaksi</a>
										<!-- jwpopup box -->
										<div id="jwpopupBox" class="jwpopup" style="display: none; 
																					position: fixed;
    																				z-index: 1;
																				    padding-top: 110px;
																				    left: 0;
																				    top: 0;
																				    width: 100%;
																				    height: 100%;
																				    overflow: auto;
																				    background-color: rgb(0,0,0);
																				    background-color: rgba(0,0,0,0.7);"
										>
										<!-- jwpopup content -->
											<div class="jwpopup-content" style="position: relative;
																			    background-color: #fefefe;
																			    margin: auto;
																			    padding: 0;
																			    max-width: 500px;
																			    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
																			    -webkit-animation-name: animatetop !important;
																			    -webkit-animation-duration: 0.4s !important;
																			    animation-name: animatetop !important;
																			    animation-duration: 0.4s !important;"
											>
											<div class="jwpopup-head" style="font-size: 11px;
																		    padding: 1px 16px;
																		    color: white;
																		    color: #e44f2b;
																    		background: #e44f2b; /* For browsers that do not support gradients */
																  		  	background: -webkit-linear-gradient(#e44f2b, #e44f2b); /* For Safari 5.1 to 6.0 */
																		    background: -o-linear-gradient(#e44f2b, #e44f2b); /* For Opera 11.1 to 12.0 */
																		    background: -moz-linear-gradient(#006faa, #e44f2b); /* For Firefox 3.6 to 15 */
																		    background: linear-gradient(#e44f2b, #e44f2b); /* Standard syntax */">
    										>
											<span class="tutup" style="	margin-top: 0px;
																	    color: white;
																	    float: right;
																	    font-size: 24px;
																	    font-weight: bold;"
											>
    										×</span>

												<p style="
														font-size: 16px;
														letter-spacing: 2px;
														font-family: sans-serif;
														font-weight: bold;
														color: white;
														padding: 0px 0px;
														padding-top: 0px;
														padding-bottom: 10px;
														border-radius: 2px 2px">
														Cara Transaksi Melalui Agromedia Group</p>
										</div>
									
									<div class="jwpopup-main" style="padding: 5px 16px;">
										<p style=" 		
														line-height: 26px;
														font-size: 14px;
														font-family: sans-serif;
														color: black;
														padding: 5px 5px;
														padding-top: 3px;
														padding-bottom: 3px; 
														border-radius: 2px 2px"> 

											
												</br>
												<img src="../images/BRI.jpg" style="margin: 0px auto; text-align: center" >
												<img src="../images/bersama.jpg" style="margin: 0px auto; text-align: center"  >
												<img src="../images/bni.png" style="margin: 0px auto; text-align: center">
												<img src="../images/link.png" style="margin: 0px auto; text-align: center" >

											<p style="	
														font-style: bold;
														background-color: brown; 
														font-family: sans-serif;
														color: white;
														padding: 5px 5px;
														border-radius: 2px 2px"> 
														<img src="../images/cara.png">
											<u>Penting</u> !</br> Lakukan pengiriman dana hanya melalui rekening yang tertera pada website kami, Terimakasih.</br>
											</p>
										</p>
									</div>
									<div class="jwpopup-foot" style="font-size: 12px;
																    padding: .5px 16px;
																    color: #e44f2b;
																    background: #e44f2b; /* For browsers that do not support gradients */
																    background: -webkit-linear-gradient(#e44f2b, #e44f2b); /* For Safari 5.1 to 6.0 */
																    background: -o-linear-gradient(#e44f2b, #e44f2b); /* For Opera 11.1 to 12.0 */
																    background: -moz-linear-gradient(#006faa, #e44f2b); /* For Firefox 3.6 to 15 */
																    background: linear-gradient(#e44f2b, #e44f2b); /* Standard syntax */">
										
										<p style="		
														letter-spacing: 2px;
														color: white;
														font-family: sans-serif;
														padding: 5px 5px;
														border-radius: 2px 2px;
														float : center">
											Selamat Berbelanja</br>
										</p>
									</div>
							</div>
					</div>

						<script>
							// untuk mendapatkan jwpopup
							var jwpopup = document.getElementById('jwpopupBox');

							// untuk mendapatkan link untuk membuka jwpopup
							var mpLink = document.getElementById("jwpopupLink");

							// untuk mendapatkan aksi elemen tutup
							var tutup = document.getElementsByClassName("tutup")[0];

							// membuka jwpopup ketika link di klik
							mpLink.onclick = function() {
							    jwpopup.style.display = "block";
							}

							// membuka jwpopup ketika elemen di klik
							tutup.onclick = function() {
							    jwpopup.style.display = "none";
							}

							// membuka jwpopup ketika user melakukan klik diluar area popup
							window.onclick = function(event) {
							    if (event.target == jwpopup) {
							        jwpopup.style.display = "none";
							    }
							}
						</script>
					</li>
				</ul>
			</div>
			<div class="product_list_header">

					<form action="../checkout.php" method="post" class="keranjang"> 
						<button class="w3view-cart" type="submit" name="submit" value="">
							<i class="fa fa-cart-arrow-down" aria-hidden="true">
									<?php	

										if(isset($_SESSION['member']) || isset($_SESSION['b2b'])) {
											$jum = mysql_query("select * from penjualan where id_pembeli='$_SESSION[id]' and status='cart'");
											$jumlah_cart = mysql_num_rows($jum);
					
												 echo "($jumlah_cart)";
										}
												

										else {}
									?>
									
							</i>
							
						</button>
					</form>  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online atau Hubungi Kami : (+62) 821 2222 2233</li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="../index.php">Agromedia Group</a></h1>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Cari Produk . . . " required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="../index.php" class="act">Home</a></li>	
									<li><a href="../about.php">Profil Kami</a></li>
									<li><a href="../produk.php">Produk</a></li>
									<li><a href="../penawaran_spesial.php">Penawaran Spesial</a></li>
									
									<?php	

										if(isset($_SESSION['member']) || isset($_SESSION['b2b'])) {
											$jum = mysql_query("select * from penjualan where id_pembeli='$_SESSION[id]' and status='cart'");
											$jumlah_cart = mysql_num_rows($jum);
					
												 echo "
												 	<li><a href='profil_saya.php'>Akun Saya</a></li>
												 	<li><a href='konfirmasi_pembayaran.php'></i> Konfirmasi</a></li>
													<li><a href='checkout.php'>Cart ($jumlah_cart) </a></li>						
													<li><a href='logout.php'>Logout</a></li>
													";
										}
												

										else {}
									?>

								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->