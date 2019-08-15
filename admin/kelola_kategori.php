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

    <?php 
       
          function update(){ // ini akan mengarah ke function ubah()

            if(isset($_POST['btn_simpan'])){
                          
                        $id_kategori=$_POST['id_kategori'];
                        $kategori=$_POST['txtKat'];

                          $update= "kategori='".$kategori."'";
                          $sql_update = "UPDATE k_buku SET ".$update." WHERE id_kategori=".$id_kategori."";
                          $exe = mysql_query($sql_update);

                          echo "<script language='javascript'> alert ('Kategori berhasil di Update ....'); document.location='kelola_kategori.php'; </script>";
                      }

          }

        function ubah(){

                    if(isset($_GET['id_kategori'])){

                        $id=$_GET['id_kategori'];

                        $sql_ubah = "SELECT kategori, id_kategori FROM k_buku WHERE id_kategori=".$id ;
                        $exe = mysql_query($sql_ubah);
                        $b= mysql_fetch_array($exe);

                        $id_kat=$b[1];
                        $kategori=$b[0];
                      
                        ?>

                <div class="form-two widget-shadow">
                    <div class="form-title">
                      <h4>Form Ubah Data :</h4>
                    </div>
                    <div class="form-body" data-example-id="simple-form-inline">
                        <form action="kelola_kategori.php?aksi=update&id_kategori=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
                          <fieldset>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">    
                                    <div class="form-group">
                                          <input type="hidden" name="id_kategori" value="<?php echo $id ?>"/>
                                          <label for="exampleInputName2">Nama Kategori :</label> 
                                          <input type="text" class="form-control" name="txtKat" value="<?php echo ucwords(str_replace("_"," ",$kategori)); ?> ">   
                                    </div>
                            </div>
                            <div class="col-md-3"></div>
                            
                            <div class="col-md-10">
                            </div>
                            <div class="col-md-2" style="float: right;">
                                <button type="submit" name="btn_simpan" class="btn btn-info hvr-icon-float-away col-24">Simpan</button> 
                            </div> 
                            </fieldset>
                        </form>
                        <div class="clearfix"></div>
                      </div>
               </div>

                      <?php
                   } 
                  }

            function tabel()  {
              ?>

      <div class="tables">
          <h2 class="title1"></h2>
          <div class="table-responsive bs-example widget-shadow">
            <div class = "colmd-2">
                        <h2 class="title1">Data Kategori : 

                          <a class='btn btn-warning btn-xs hvr-icon-float-away' href='kelola_kategori.php?aksi=tambah'><i class='fa fa-trash'></i> Tambah Data</a></h2> 
                      </div>
            <table class="table table-bordered table-hover"> 
              <thead> 
                <tr class="success"> 
                  <th style="text-align: center;">No.</th> 
                  <th style="text-align: center;">ID Kategori Buku</th>
                  <th style="text-align: center;">Kategori Buku</th> 
                  <th style="text-align: center;">Aksi Tindakan</th>
                </tr> 
              </thead>

              <?php 

                  $page = (isset($_GET['page']))? $_GET['page'] : 1;

                  $limit = 10; // Jumlah data per halamannya
                  
                  // Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
                  $limit_start = ($page - 1) * $limit;
                  
                  // Buat query untuk menampilkan data siswa sesuai limit yang ditentukan

                  $sql=mysql_query("select id_kategori, kategori from k_buku limit ".$limit_start.",".$limit);

                  $no = $limit_start + 1;

                  while ($b=mysql_fetch_array($sql)){

                    $id_kat=$b[0];
                    $nama_kat=$b[1];
                  
              ?> 
              <tbody> 
                <tr> 
                  <th scope="row"><?php echo $no;?></th> 
                  <td style="text-align: center;">ID_Kategori_<?php echo $id_kat;?></td>
                  <td style="text-align: center;"><?php echo ucwords(str_replace("_"," ",$nama_kat));?></td>  
                  <td style="text-align: center;">
                      <a class='btn btn-primary btn-xs' href='kelola_kategori.php?aksi=ubah&id_kategori=<?php echo $id_kat;?>'>
                      <i class='fa fa-cogs'></i> Edit</a>
                      <a class='btn btn-danger btn-xs' href='kelola_kategori.php?aksi=hapus&id_kategori=<?php echo $id_kat;?>'>
                      <i class='fa fa-trash'></i> Hapus</a>
                  </td> 
                </tr> 
              
              </tbody> 
              <?php 
                  $no++; // Tambah 1 setiap kali looping
                
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
                  <li><a href="kelola_kategori.php?page=1"><<</a></li>
                  <li><a href="kelola_kategori.php?page=<?php echo $link_prev; ?>"><</a></li>
                <?php
                }
                ?>
                
                <!-- LINK NUMBER -->
                <?php
                // Buat query untuk menghitung semua jumlah data
                $sql2 =("SELECT COUNT(*) AS jumlah FROM k_buku");
                $sql2 = mysql_query($sql2); // Eksekusi querynya

                $get_jumlah = mysql_fetch_array($sql2);
                
                $jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
                $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
                $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
                $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
                
                for($i = $start_number; $i <= $end_number; $i++){
                  $link_active = ($page == $i)? ' class="active"' : '';
                ?>
                  <li<?php echo $link_active; ?>><a href="kelola_kategori.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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
                  <li><a href="kelola_kategori.php?page=<?php echo $link_next; ?>">></a></li>
                  <li><a href="kelola_kategori?page=<?php echo $jumlah_page; ?>">>></a></li>
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

        <?php } 

              function tambah(){
                ?>
                  <div class="form-two widget-shadow">
                    <div class="form-title">
                      <h4>Form Tambah Data :</h4>
                    </div>
                    <div class="form-body" data-example-id="simple-form-inline">
                        <form action="kelola_kategori.php?aksi=simpan" method="POST" enctype="multipart/form-data">
                          <fieldset>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">    
                                    <div class="form-group">
                                          <input type="hidden" name="id" value=""/>
                                          <label for="exampleInputName2">Nama Kategori :</label> 
                                          <input type="text" class="form-control" name="txtKat" value="" required=" ">   
                                    </div>
                            </div>
                            <div class="col-md-3"></div>
                            
                            <div class="col-md-10">
                            </div>
                            <div class="col-md-2" style="float: right;">
                                <button type="submit" name="btn_simpan" class="btn btn-info hvr-icon-float-away col-24">Simpan</button> 
                            </div> 
                            </fieldset>
                        </form>
                        <div class="clearfix"></div>
                      </div>
               </div>

              <?php }


              function insert() { 

                  $kategori =$_POST['txtKat'];

                  $insert="'".$kategori."',''";
                  $sql_insert= "INSERT INTO k_buku VALUES (".$insert.")";

                  $exe = mysql_query($sql_insert);



              }


        ?>

        <?php
              function hapus(){

              if(isset($_GET['id_kategori']) && isset($_GET['aksi'])){
                $id = $_GET['id_kategori'];
                $sql_hapus = "DELETE FROM k_buku WHERE id_kategori=" . $id;
                $hapus = mysql_query($sql_hapus);
                echo "<script language='javascript'> alert ('Kategori berhasil di hapus ....'); document.location='kelola_kategori.php'; </script>";
                
                if($hapus){
                  if($_GET['aksi'] == 'hapus'){
                    header('location: index_admin.php');
                  }
                }
              }    
          }?>


    <?php 
    if (isset($_GET['aksi'])){
              switch($_GET['aksi']){
                case "simpan":
                  insert();
                  tabel();
                  break;
                case "update":
                  update();
                  tabel();
                  break;
                case "ubah":
                  ubah();
                  tabel();
                  break;
                case "hapus":
                  hapus();
                  break;
                case "tambah":
                  tambah();
                  tabel();
                  break;

                default:
                  echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
                  tambah();
                  tampil_data();
              }
            } else {
              tabel();
            }?>


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