<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
		<h2>Penawaran Terbaik</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Untuk Anda</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Best Seller</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="agile-tp">
								<h5>Penawaran Spesial Untuk Anda</h5>
								<p class="w3l-ad">Kami menyusun beberapa rekomendasi penawaran spesial untuk Anda, jangan sampai Anda lewatkan.</p>
							</div>
								<div class="agile_top_brands_grids">						
							<?php
								$a=mysql_query('select id_produk,nama_produk,harga,photo,kategori,keterangan,stok_buku from stok_buku order by rand() limit 0,9');
								$no=0;
								while($b=mysql_fetch_array($a)){
								$no=$no+1;

								$string=$b[5];
								list($penulis, $halaman, $tgl_terbit, $isbn, $bahasa, $berat) = explode("|", $string);

								echo "
									<div class='col-md-4 top_brand_left'>
										<div class='hover14 column'>
											<div class='agile_top_brand_left_grid'>
												<div class='agile_top_brand_left_grid_pos'>
													<img src='images/offer.png' alt=' ' class='img-responsive'>
												</div>
												<div class='agile_top_brand_left_grid1'>
													<figure>
																<form action='keterangan_produk.php?id=$b[0]' method='post'>
																<div class='snipcart-item block'>

																	<div class='snipcart-thumb'>
																		<a href='keterangan_produk.php?id=$b[0]'><img src='images/buku/$b[3]' width='200px' height='290px'/></a>		
																		<p>	$b[1]
																			</br>
																			<i>$penulis</i>
																		</p>
																		
																		<h4>Rp. ".number_format($b[2])." ,- </h4>
																	</div>

																	<div class='snipcart-details top_brand_home_details'>
																				<input type='submit' name='submit' value='Lihat Detail' class='button'>
																</form>
																	</div>
																</div>
													</figure>

												</div>

											</div>

										</div>

									</div>

										";
									}

								?>		

								<div class='clearfix'> </div>
								
							</div>
						</div>


						<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
							<div class="agile-tp">
								<h5>Penawaran Best Seller</h5>
								<p class="w3l-ad">Penawaran Terbaik Yang Kami Rekomendasikan Untuk Buku-buku Best Seller yang Tersedia di Pustaka Kami.</p>
							</div>
							<div class="agile_top_brands_grids">

							<?php
								$a=mysql_query("select id_produk,nama_produk,harga,photo,kategori,keterangan,stok_buku from stok_buku where best_seller='1' order by rand() limit 0,9");
								$no=0;
								while($b=mysql_fetch_array($a)){
								$no=$no+1;

								$string=$b[5];
								list($penulis, $halaman, $tgl_terbit, $isbn, $bahasa, $berat) = explode("|", $string);
								
								echo "
								<div class='col-md-4 top_brand_left'>
										<div class='hover14 column'>
											<div class='agile_top_brand_left_grid'>
												<div class='agile_top_brand_left_grid_pos'>
													<img src='images/offer.png' alt=' ' class='img-responsive'>
												</div>
												<div class='agile_top_brand_left_grid1'>
													<figure>
																<form action='keterangan_produk.php?id=$b[0]' method='post'>
																<div class='snipcart-item block'>

																	<div class='snipcart-thumb'>
																		<a href='keterangan_produk.php?id=$b[0]'><img src='images/buku/$b[3]' width='200px' height='290px'/></a>		
																		<p>	$b[1]
																			</br>
																			<i>$penulis</i>
																		</p>
																		
																		<h4>Rp. ".number_format($b[2])." ,- </h4>
																	</div>

																	<div class='snipcart-details top_brand_home_details'>
																				<input type='submit' name='submit' value='Lihat Detail' class='button'>
																</form>
																	</div>
																</div>
													</figure>

												</div>

											</div>

										</div>

									</div>

										";
									}

								?>	

								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
