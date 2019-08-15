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
			
      <?php function tabel(){
      ?>
      <div class="tables">
          <h2 class="title1"></h2>
          <div class="table-responsive bs-example widget-shadow">
            <div class = "colmd-2">
                              <h2 class="title1">Data Rekening: 

                          <a class='btn btn-warning btn-xs hvr-icon-float-away ' href='kelola_rekening.php?aksi=tambah'><i class='fa fa-trash'></i> Tambah Data </a></h2> 
                      </div>
            <table class="table table-bordered table-hover"> 
              <thead> 
                <tr class="success"> 
                  <th>No.</th> 
                  <th style="text-align: center;">Nomor Rekening</th>
                  <th style="text-align: center;">Nama Pemilik</th> 
                  <th style="text-align: center;">Nama Bank</th>
                  <th style="text-align: center;">Aksi Tindakan</th>
                </tr> 
              </thead>

              <?php 
                  $sql=mysql_query("select id_rekening, nomor_rekening, atas_nama, nama_bank from rekening");

                  $no=0;
                  while ($b=mysql_fetch_array($sql)){
                    $no=$no+1;

                    $id_rek=$b[0];
                    $nomor_rekening=$b[1];
                    $atas_nama=$b[2];
                    $nama_bank=$b[3];
                  
              ?> 
              <tbody> 
                <tr> 
                  <th scope="row"><?php echo $no;?></th> 
                  <td style="text-align: center;"><?php echo $nomor_rekening;?></td>
                  <td style="text-align: center;"><?php echo $atas_nama;?></td>
                  <td style="text-align: center;"><?php echo $nama_bank;?></td>
                  <td style="text-align: center;">
                      <a class='btn btn-primary btn-xs' href='kelola_rekening.php?aksi=ubah&id_rek=<?php echo $id_rek;?>'><i class='fa fa-cogs'></i> Edit</a>
                      <a class='btn btn-danger btn-xs' href='kelola_rekening.php?aksi=hapus&id_rek=<?php echo $id_rek;?>'><i class='fa fa-trash'></i> Hapus</a>
                  </td> 
                </tr> 
              
              </tbody> 
              <?php }?>
            </table> 
          </div>
          </div>
        </div>
		</div>
    <?php }

      function update(){ // ini akan mengarah ke function ubah()

            if(isset($_POST['btn_simpan'])){
                          
                        $id_rekening=$_POST['id_rekening'];
                        $nomor=$_POST['txtNomor'];
                        $nama=$_POST['txtNama'];
                        $bank=$_POST['txtBank'];

                          $update= "nomor_rekening='".$nomor."', atas_nama='".$nama."', nama_bank='".$bank."'";
                          $sql_update = "UPDATE rekening SET ".$update." WHERE id_rekening=".$id_rekening."";
                          $exe = mysql_query($sql_update);

                          echo "<script language='javascript'> alert ('Rekening berhasil di Update ....'); document.location='kelola_rekening.php'; </script>";
                      }

          }

      function ubah(){

                    if(isset($_GET['id_rek'])){

                        $id=$_GET['id_rek'];

                        $sql_ubah = "SELECT id_rekening, nomor_rekening, atas_nama, nama_bank FROM rekening WHERE id_rekening=".$id ;
                        $exe = mysql_query($sql_ubah);
                        $b= mysql_fetch_array($exe);

                        $id_rekening=$b[0];
                        $no_rek=$b[1];
                        $nama=$b[2];
                        $bank=$b[3];
                        
                      
                        ?>

                <div class="form-two widget-shadow">
                    <div class="form-title">
                      <h4>Form Ubah Data :</h4>
                    </div>
                    <div class="form-body" data-example-id="simple-form-inline">
                        <form action="kelola_rekening.php?aksi=update&id=<?php echo $id_rekening;?>" method="POST" enctype="multipart/form-data">
                          <fieldset>
                            
                            <div class="col-md-4">    
                                    <div class="form-group">
                                          <input type="hidden" name="id_rekening" value="<?php echo $id_rekening;?>">
                                          <label for="exampleInputName2">Nomor Rekening :</label> 
                                          <input type="text" class="form-control" name="txtNomor" value="<?php echo $no_rek;?>" required=" ">   
                                    </div>
                            </div>
                            <div class="col-md-4">    
                                    <div class="form-group">
                                          <input type="hidden" name="id" value=""/>
                                          <label for="exampleInputName2">Nama Pemilik :</label> 
                                          <input type="text" class="form-control" name="txtNama" value="<?php echo $nama;?>" required=" ">   
                                    </div>
                            </div>
                            <div class="col-md-4">    
                                    <div class="form-group">
                                          <input type="hidden" name="id" value=""/>
                                          <label for="exampleInputName2">Nama Bank:</label> 
                                          <input type="text" class="form-control" name="txtBank" value="<?php echo $bank;?>" required=" ">   
                                    </div>
                            </div>
                            
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


      function tambah(){ ?>

                  <div class="form-two widget-shadow">
                    <div class="form-title">
                      <h4>Form Tambah Data :</h4>
                    </div>
                    <div class="form-body" data-example-id="simple-form-inline">
                        <form action="kelola_pengguna.php?aksi=simpan" method="POST" enctype="multipart/form-data">
                          <fieldset>
                            
                            <div class="col-md-6">    
                                    <div class="form-group">
                                          <input type="hidden" name="id" value=""/>
                                          <label for="exampleInputName2">Nama Member :</label> 
                                          <input type="text" class="form-control" name="txtNama" value="" required=" ">   
                                    </div>
                            </div>
                            <div class="col-md-6">    
                                    <div class="form-group">
                                          <input type="hidden" name="id" value=""/>
                                          <label for="exampleInputName2">Alamat :</label> 
                                          <input type="text" class="form-control" name="txtAlamat" value="" required=" ">   
                                    </div>
                            </div>
                            <div class="col-md-6">    
                                    <div class="form-group">
                                          <input type="hidden" name="id" value=""/>
                                          <label for="exampleInputName2">Nomor Handphone :</label> 
                                          <input type="number" class="form-control" name="txtHp" value="" required=" ">   
                                    </div>
                            </div>
                            <div class="col-md-6">    
                                    <div class="form-group">
                                          <input type="hidden" name="id" value=""/>
                                          <label for="exampleInputName2">E-mail :</label> 
                                          <input type="email" required=" " class="form-control" name="txtEmail" value="">   
                                    </div>
                            </div>
                            
                            
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

                  $nama=$_POST['txtNama'];
                  $alamat=$_POST['txtAlamat'];
                  $no_hp=$_POST['txtHp'];
                  $email=$_POST['txtEmail'];

                  $insert="'','".$nama."','".$alamat."','".$no_hp."','".$email."'";
                  $sql_insert= "INSERT INTO member VALUES (".$insert.")";

                  $exe = mysql_query($sql_insert);

                  echo "<script language='javascript'> alert ('Member berhasil ditambah ....'); document.location='kelola_pengguna.php'; </script>";


              }

       function hapus(){

              if(isset($_GET['id']) && isset($_GET['aksi'])){
                $id = $_GET['id'];
                $sql_hapus = "DELETE FROM member WHERE id=" . $id;
                $hapus = mysql_query($sql_hapus);
                echo "<script language='javascript'> alert ('Member berhasil dihapus ....'); document.location='kelola_pengguna.php'; </script>";
                
                if($hapus){
                  if($_GET['aksi'] == 'hapus'){
                    header('location: kelola_pengguna.php');
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
            }
    ?>


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