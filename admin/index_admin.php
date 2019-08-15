<?php
include '../modul/conn.php';

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Agromedia Group</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">


</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> Agromedia<span class="dashboard_text">Laman Kelola Situs</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="index_admin.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  
			  <li class="header">KELOLA DATA</li>
			  <li><a href="kelola_buku.php"><i class="fa fa-book"></i> <span>Kelola Buku</span></a></li>
              <li><a href="kelola_kategori.php"><i class="fa fa-exchange"></i> <span>Kelola Kategori</span></a></li>
              <li><a href="kelola_pengguna.php"><i class="fa fa-group"></i> <span>Kelola Pengguna</span></a></li>
              <li><a href="kelola_b2b.php"><i class="fa fa-first-order"></i> <span>Kelola B2B</span></a></li>
              <li><a href="kelola_rekening.php"><i class="fa fa-money"></i> <span>Kelola Rekening</span></a></li>	
              
              <li class="header">LAPORAN</li>
              <li><a href="laporan_pengguna.php"><i class="fa fa-angle-right text-red"></i> <span>Data Pengguna</span></a></li>
              <li><a href="laporan_buku.php"><i class="fa fa-angle-right text-yellow"></i> <span>Data Buku</span></a></li>
              <li><a href="laporan_penjualan.php"><i class="fa fa-angle-right text-aqua"></i> <span>Data Transaksi</span></a></li>

              <li class="header"></li>
              <li><a href="logout.php"><i class="fa fa-unlink"></i> <span>LOG OUT</span></a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-right">
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span> 
									<div class="user-name">
										<p>Admin</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>
                        <?php
                            $a=mysql_query("select sum(stok_buku.harga) from stok_buku");
                           while($b=mysql_fetch_array($a)) {
                           echo "".number_format($b[0])."";
                           }
                           ?>
                          
                      </strong></h5>
                      <span>Total Harga</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                    <div class="stats">
                      <?php
                           $a=mysql_query("select * from penjualan");
                           $jumlah_penjual = mysql_num_rows($a);
                           echo "<h5><strong>$jumlah_penjual</strong></h5>";
                      ?>
                      
                      <span>Transaksi Buku</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-book user2 icon-rounded"></i>
                    <div class="stats">
                      <?php
                          $a=mysql_query("select * from stok_buku");
                          $jumlah_penjual = mysql_num_rows($a);
                          echo "<h5><strong>$jumlah_penjual</strong></h5>";
                      ?> 
                      <span>Total Produk</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                    <div class="stats">
                      <?php
                          $a=mysql_query("select distinct(id_produk) from penjualan");
                          $jumlah_penjual = mysql_num_rows($a);
                          echo "<h5><strong>$jumlah_penjual</strong></h5>";
                      ?>
                      <span>Produk Terjual</span>
                    </div>
                </div>
        	 </div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                              <?php
                                $a=mysql_query("select * from member");
                                $jumlah_member = mysql_num_rows($a);
                                echo "<h5><strong>$jumlah_member</strong></h5>"; 
                              ?>
                      
                      <span>Total Member</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
    <div class="tables">
          
          <div class="table-responsive bs-example widget-shadow">
            
            <h2 class="title1">Data Transaksi :</h2>
            <table class="table table-bordered table-hover" style="font-size: 14px"> 
              <thead> 
                <tr class="success"> 
                  <th>No.</th> 
                  <th>Nama Pembeli</th> 
                  <th>Nama Buku</th>
                  <th>Penulis</th>
                  <th>Jumlah Beli</th> 
                  <th>Stok Tersedia</th> 
                  <th>Tanggal Transaksi</th>
                  <th>Status</th>
                  <th>Bukti Transfer</th>
                  <th>Aksi Transaksi</th> 
                </tr> 
              </thead>

              <?php 

                  $page = (isset($_GET['page']))? $_GET['page'] : 1;

                  $limit = 10; // Jumlah data per halamannya
                  
                  // Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
                  $limit_start = ($page - 1) * $limit;
                  
                  // Buat query untuk menampilkan data siswa sesuai limit yang ditentukan

                  $sql=mysql_query("select  penjualan.id_transaksi,
                                            penjualan.id_pembeli,
                                            penjualan.id_produk,
                                            penjualan.jumlah,
                                            penjualan.tanggal,
                                            penjualan.status,
                                            penjualan.id_rekening,

                                            stok_buku.nama_produk,
                                            stok_buku.stok_buku,
                                            
                                            stok_buku.photo,
                                            stok_buku.keterangan,
                                            penjualan.role
                                            

                                    from    penjualan, stok_buku

                                    where   penjualan.id_produk=stok_buku.id_produk
                                    and     penjualan.status not in ('cart')

                                    order by penjualan.status desc limit ".$limit_start.",".$limit);
                  $no=$limit_start + 1;
                  while ($b=mysql_fetch_array($sql)){
                    

                    $id_transaksi =$b[0];
                    $id_pembeli=$b[1];
                    $id_produk=$b[2];
                    $jumlah=$b[3];
                    $tanggal = date('d-m-Y',strtotime($b[4]));
                    $status=$b[5];
                    $id_rekening=$b[6];
                    $nama_produk=$b[7];
                    $stok=$b[8];
                    $role=$b[11];

                      if($role === 'b2b'){
                        $sqlr=mysql_query("select nama from company where id='$id_pembeli'");
                        $exe=mysql_fetch_array($sqlr);
                        $nama=$exe[0];
                      }
                      else{
                        $sqlr=mysql_query("select nama from member where id='$id_pembeli'");
                        $exe=mysql_fetch_array($sqlr);
                        $nama=$exe[0];
                      }

                    $foto=$b[9];
                    $string=$b[10];
                      list($penulis, $halaman, $tgl_terbit, $isbn, $bahasa, $penerbit, $berat, $deskripsi) = explode("|", $string);
              ?> 
              <tbody> 
                <tr> 
                  <th scope="row"><?php echo $no;?></th> 
                  <td><?php echo $nama;?></td> 
                  <td><?php echo $nama_produk;?></td> 
                  <td><?php echo $penulis;?></td>
                  <td><?php echo $jumlah;?></td> 
                  <td><?php echo $stok;?></td> 
                  <td><?php echo $tanggal;?></td> 
                  <td>
              <?php 
                  switch ($b[5]) {
                  case 'konfirmasi_pembayara':
                        echo "Belum Dikonfirmasi";
                  break;
                  case 'konfirmasi_pembayaran':
                        echo "Belum Dikonfirmasi";
                  break;
                  case 'konfirmasi_admin':
                        echo "Belum Dikonfirmasi";
                  break;
                  case 'finish';
                        echo "Sudah Dikonfirmasi";
                  break;
                  }
              ?>
                  </td>
                  <td>
                    <?php     
                        $sql_a=mysql_query("select bukti_transfer from bukti_trf where id_transaksi='$id_transaksi'");
                        while($d=mysql_fetch_array($sql_a)) {
                          echo "<a target='_blank' class='btn btn-info btn-xs' href='../images/bukti/$d[0]'>Lihat Bukti</a>";
                        }
                    ?>
                  </td>
                  <td style="text-align: center;">
                    <?php 
                      if($status=='finish'){
                        echo "
                        <a class='btn btn-success btn-xs hvr-icon-bounce col-10'>Selesai  </a>
                        ";
                      }
                      else{
                        echo "
                        <a class='btn btn-warning btn-xs' href='verifikasi.php?id_transaksi=$id_transaksi'><i class='fa fa-check-square-o'></i> Verifikasi</a>
                        ";}
                    ?>
                        <a class='btn btn-danger btn-xs' href='delete_transaksi.php?id_transaksi=<?php echo $id_transaksi;?>'><i class='fa fa-trash'></i></a>
                  </td> 
                </tr> 
              
              </tbody> 
              <?php $no++; // Tambah 1 setiap kali looping
              }?>
            </table> 

            <div class="col-md-7"></div>
            <div class="col-md-5" style="" >
              <ul class="pagination" style="margin-left: 90px">
                <!-- LINK FIRST AND PREV -->
                <?php
                if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
                ?>
                  <li class="disabled"><a href="#"><<</a></li>
                  <li class="disabled"><a href="#"><</a></li>
                <?php
                }else{ // Jika page bukan page ke 1
                  $link_prev = ($page > 1)? $page - 1 : 1;
                ?>
                  <li><a href="index_admin.php?page=1"><<</a></li>
                  <li><a href="index_admin.php?page=<?php echo $link_prev; ?>"><</a></li>
                <?php
                }
                ?>
                
                <!-- LINK NUMBER -->
                <?php
                // Buat query untuk menghitung semua jumlah data
                $sql2 =("SELECT COUNT(*) AS jumlah FROM penjualan");
                $sql2 = mysql_query($sql2); // Eksekusi querynya

                $get_jumlah = mysql_fetch_array($sql2);
                
                $jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
                $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
                $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
                $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
                
                for($i = $start_number; $i <= $end_number; $i++){
                  $link_active = ($page == $i)? ' class="active"' : '';
                ?>
                  <li<?php echo $link_active; ?>><a href="index_admin.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php
                }
                ?>
                
                <!-- LINK NEXT AND LAST -->
                <?php
                // Jika page sama dengan jumlah page, maka disable link NEXT nya
                // Artinya page tersebut adalah page terakhir 
                if($page == $jumlah_page){ // Jika page terakhir
                ?>
                  <li class="disabled"><a href="#">></a></li>
                  <li class="disabled"><a href="#">>></a></li>
                <?php
                }else{ // Jika Bukan page terakhir
                  $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                ?>
                  <li><a href="index_admin.php?page=<?php echo $link_next; ?>">></a></li>
                  <li><a href="index_admin.php?page=<?php echo $jumlah_page; ?>">>></a></li>
                <?php
                }
                ?>
              </ul>
            </div>
           <!-- <div class="col-md-4"></div>-->
            
          </div>
          </div>

        </div>
		
		
		</div>
	<!--footer-->
	<div class="footer">
	   <p>© 2018 Agromedia Group. All rights reserved | Design by <a href="#">Agromedia</a></p>		
	</div>
    <!--//footer-->
	</div>

    </script>
	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>