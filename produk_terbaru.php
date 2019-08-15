<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>Produk Terbaru</h3>
				<div class="agile_top_brands_grids">
					<?php
								$a=mysql_query('select id_produk,nama_produk,harga,photo,kategori,keterangan,stok_buku from stok_buku order by id_produk DESC limit 0,4 ');
								$no=0;
								while($b=mysql_fetch_array($a)){
								$no=$no+1;

								$string=$b[5];
								list($penulis, $halaman, $tgl_terbit, $isbn, $bahasa, $berat) = explode("|", $string);
							
					?>

					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<form action="keterangan_produk.php?id=<?php echo $b[0];?>" method="post">
												<a href="keterangan_produk.php?id=<?php echo $b[0];?>">
													<img title=" " alt=" " src="images/buku/<?php echo $b[3];?>" width='200px' height='290px'>
												</a>		
												<p><?php echo $b[1];?></p>
												<h4>Rp. <?php echo $b[2];?></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
													<input type="submit" name="submit" value="Lihat Detail" class="button">
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //new -->