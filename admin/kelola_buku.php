<?php
include '../modul/conn.php';
$self = $_SERVER['REQUEST_URI'];
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
                          
                        $id_buku=$_POST['id'];
                        $nama_buku=$_POST['txtJudul'];
                        $harga=$_POST['txtHarga'];

                        $foto = $_FILES['txtCover']['tmp_name'];
                        $nm_foto = md5($foto).".png";
                          copy($foto,"../images/buku/" . $nm_foto);

                        $kategori=$_POST['kategori'];
                        $stok=$_POST['txtStok'];

                        
                        //field keterangan
                        $penulis= $_POST['txtPenulis'];
                        $halaman=$_POST['txtHalaman'];
                        $tgl_terbit=$_POST['txtTgl'];
                        $isbn=$_POST['txtIsbn'];
                        $bahasa=$_POST['txtBahasa'];
                        $penerbit=$_POST['txtPenerbit'];
                        $berat=$_POST['txtBerat'];
                        $deskripsi=$_POST['txtDeskripsi'];

                        $bsell=$_POST['bsell'];

                        
                        #if(!empty($id_buku) && !empty($nama_buku) && !empty( $harga) && !empty($foto) && !empty($kategori) && !empty($stok) && !empty( $penulis) && !empty($halaman) && !empty($tgl_terbit) && !empty($isbn) && !empty( $bahasa) && !empty($penerbit) && !empty($berat) && !empty($deskripsi) && !empty($bsell)){

                          $string = array($penulis, $halaman, $tgl_terbit, $isbn , $bahasa, $penerbit, $berat, $deskripsi);
                          $keterangan= implode("|", $string);


                          $update= "nama_produk='".$nama_buku."',harga='".$harga."',photo='".$nm_foto."',kategori='".$kategori."',keterangan='".$keterangan."',stok_buku='".$stok."',best_seller='".$bsell."'";

                          $sql_update = "UPDATE stok_buku SET ".$update." WHERE id_produk=".$id_buku."";

                          $exe = mysql_query($sql_update);

                          echo "<script language='javascript'> alert ('Produk berhasil di Update ....'); document.location='kelola_buku.php'; </script>";

                          #if($exe && isset($_GET['aksi'])){
                           # if($_GET['aksi'] == 'insert'){
                            #  header('location: index.php');
                            #}
                          #}
                        #} else {
                         # $pesan = "Data tidak lengkap!";
                        #}
                      }

          }

          function ubah(){
                    if(isset($_GET['id_produk'])){

                        $id=$_GET['id_produk'];



                        $sql_ubah = "SELECT id_produk, nama_produk, harga, photo, kategori, keterangan, stok_buku FROM stok_buku WHERE id_produk=".$id ;
                        $exe = mysql_query($sql_ubah);
                        $b= mysql_fetch_array($exe);

                        $id_buku=$b[0];
                        $nama_buku=$b[1];
                        $harga=$b[2];
                        $foto =$b[3];
                        $kategori=$b[4];
                        $stok=$b[6];

                        $string=$b[5];
                          list($penulis, $halaman, $tgl_terbit, $isbn, $bahasa, $penerbit, $berat, $deskripsi) = explode("|", $string);

                        ?>

                <div class="form-two widget-shadow">
                    <div class="form-title">
                      <h4>Form Ubah Data :</h4>
                    </div>
                    <div class="form-body" data-example-id="simple-form-inline">
                        <form action="kelola_buku.php?aksi=update&id_produk=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
                          <fieldset>
                            <div class="col-md-12">    
                                    <div class="form-group">
                                          <input type="hidden" name="id" value="<?php echo $id ?>"/>
                                          <label for="exampleInputName2">Judul Buku :</label> 
                                          <input type="text" class="form-control" name="txtJudul" value="<?php echo $nama_buku ; ?> ">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Penulis :</label> 
                                          <input type="text" class="form-control" name="txtPenulis" value="<?php echo $penulis ; ?>">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Penerbit :</label> 
                                          <input type="text" class="form-control" name="txtPenerbit" value="<?php echo $penerbit ; ?>">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">ISBN :</label> 
                                          <input type="text" class="form-control" name="txtIsbn" value="<?php echo $isbn ; ?>">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Bahasa :</label> 
                                          <input type="text" class="form-control" name="txtBahasa" value="<?php echo $bahasa ; ?>">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Tanggal Terbit :</label> 
                                          <input type="date" class="form-control" name="txtTgl" value="<?php echo $tgl_terbit ; ?>">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Berat Buku :</label> 
                                          <input type="text" class="form-control" name="txtBerat" value="<?php echo $berat ; ?>">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Stok Tersedia :</label> 
                                          <input type="text" class="form-control" name="txtStok" value="<?php echo $stok ; ?>">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Jumlah Halaman :</label> 
                                          <input type="text" class="form-control" name="txtHalaman" value="<?php echo $halaman ; ?>">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Harga Buku :</label> 
                                          <input type="text" class="form-control" name="txtHarga" value="<?php echo $harga ; ?>">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                            <label for="exampleInputFile">Kategori Buku :</label>

                                            <select name="kategori">
                                              <?php
                                                    $sql_kat=mysql_query("select kategori from k_buku where id_kategori=$kategori");
                                                    $c=mysql_fetch_array($sql_kat);
                                                ?>
                                              <option value="<?php echo $kategori;?>"> <?php echo ucwords(str_replace("_"," ",$c[0])); ?>

                                              </option>
                                              <option value="">=====================</option>
                                              <?php 
                                                  $get_kat=mysql_query("select kategori, id_kategori from k_buku");
                                                  while ($exe=mysql_fetch_array($get_kat)){
                                                    echo "<option value='$exe[1]'>".ucwords(str_replace("_"," ",$exe[0]))."</option>";
                                                }
                                              ?>
                                            </select> 
                                    </div>  
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                          <label for="exampleInputFile">Deskripsi :</label>
                                          <textarea name="txtDeskripsi" cols="100" rows="2" class="form-control1">
                                            <?php echo $deskripsi ; ?>
                                          </textarea> 
                                    </div>
                            </div>
                             <div class="col-md-3">
                                    <div class="form-group"> 
                                        <label for="exampleInputFile">Gambar Cover :</label> 
                                        <input type="file" name='txtCover'> 
                                        <p class="help-block">Tambahkan Gambar Preview Buku.</p> 
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="checkbox">Best Seller : </label> 
                                        <label>
                                        <input type="radio" name="bsell" value="1">
                                          Ya 
                                        </label>
                                        <label>
                                        <input type="radio" name="bsell" value="0">
                                          Tidak
                                        </label>
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

          function tabel(){ 
                ?>

                <div class="tables">
                    
                    <div class="table-responsive bs-example widget-shadow">
                      <div class = "colmd-2">
                        <h2 class="title1">Data Buku : 

                          <a class='btn btn-warning btn-xs hvr-icon-float-away' href='kelola_buku.php?aksi=tambah'><i class='fa fa-trash'></i> Tambah Data</a></h2> 
                      </div>

                      <table class="table table-bordered table-hover"> 
                        <thead> 
                          <tr class="success"> 
                            <th>No.</th> 
                            <th>Cover Buku</th>
                            <th>Judul Buku</th> 
                            <th>Penulis</th>
                            <th>Tanggal Terbit</th>
                            <th>Harga</th> 
                            <th>Stok Tersedia</th> 
                            <th>No.ISBN</th> 
                            <th>Penerbit</th>
                            <th>Aksi Tindakan</th>
                          </tr> 
                        </thead>

                        <?php 

                            $page = (isset($_GET['page']))? $_GET['page'] : 1;

                            $limit = 10; // Jumlah data per halamannya
                            
                            // Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
                            $limit_start = ($page - 1) * $limit;
                            
                            // Buat query untuk menampilkan data siswa sesuai limit yang ditentukan

                            $sql=mysql_query("select id_produk, nama_produk, harga, photo, kategori, keterangan, stok_buku from stok_buku limit ".$limit_start.",".$limit);

                            $no = $limit_start + 1;
                            while ($b=mysql_fetch_array($sql)){
                              

                              $id_buku=$b[0];
                              $nama_buku=$b[1];
                              $harga=$b[2];
                              $foto =$b[3];
                              $kategori=$b[4];
                              $stok=$b[6];

                              $string=$b[5];
                                list($penulis, $halaman, $tgl_terbit, $isbn, $bahasa, $penerbit, $berat, $deskripsi) = explode("|", $string);

                        ?> 
                        <tbody> 
                          <tr> 
                            <th scope="row"><?php echo $no;?></th> 
                            <td><img src="../images/buku/<?php echo $foto;?>" width="100%" height="30%"></td>
                            <td><?php echo $nama_buku;?></td> 
                            <td><?php echo $penulis;?></td> 
                            <td><?php echo $tgl_terbit;?></td>
                            <td><?php echo number_format($harga);?></td> 
                            <td><?php echo $stok;?></td> 
                            <td><?php echo $isbn;?></td>
                            <td><?php echo $penerbit;?></td>  
                            <td>
                              <form method="post">
                                <a class='btn btn-info btn-xs' href='kelola_buku.php?aksi=ubah&id_produk=<?php echo $b[0];?>'><i class='fa fa-cogs'></i> Ubah Data</a>
                                <a class='btn btn-danger btn-xs' href='kelola_buku.php?aksi=hapus&id_produk=<?php echo $b[0];?>'><i class='fa fa-trash'></i> Hapus Data</a>
                              </form>
                            </td> 
                          </tr> 
                        
                        </tbody> 
                        <?php $no++; // Tambah 1 setiap kali looping

                        } 
                        
                        ?>
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
                  <li><a href="kelola_buku.php?page=1"><<</a></li>
                  <li><a href="kelola_buku.php?page=<?php echo $link_prev; ?>"><</a></li>
                <?php
                }
                ?>
                
                <!-- LINK NUMBER -->
                <?php
                // Buat query untuk menghitung semua jumlah data
                $sql2 =("SELECT COUNT(*) AS jumlah FROM stok_buku");
                $sql2 = mysql_query($sql2); // Eksekusi querynya

                $get_jumlah = mysql_fetch_array($sql2);
                
                $jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
                $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
                $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
                $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
                
                for($i = $start_number; $i <= $end_number; $i++){
                  $link_active = ($page == $i)? ' class="active"' : '';
                ?>
                  <li<?php echo $link_active; ?>><a href="kelola_buku.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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
                  <li><a href="kelola_buku.php?page=<?php echo $link_next; ?>">></a></li>
                  <li><a href="kelola_buku.php?page=<?php echo $jumlah_page; ?>">>></a></li>
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


          function tambah(){ ?> 
          <!-- ini akan mengarah ke function insert -->

            <div class="form-two widget-shadow">
                    <div class="form-title">
                      <h4>Form Tambah Data :</h4>
                    </div>
                    <div class="form-body" data-example-id="simple-form-inline">
                        <form action="kelola_buku.php?aksi=simpan" method="POST" enctype="multipart/form-data">
                          <fieldset>
                            <div class="col-md-12">    
                                    <div class="form-group">
                                          <input type="hidden" name="id" value=""/>
                                          <label for="exampleInputName2">Judul Buku :</label> 
                                          <input type="text" class="form-control" name="txtJudul" value="">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Penulis :</label> 
                                          <input type="text" class="form-control" name="txtPenulis" value="">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Penerbit :</label> 
                                          <input type="text" class="form-control" name="txtPenerbit" value="">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">ISBN :</label> 
                                          <input type="text" class="form-control" name="txtIsbn" value="">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Bahasa :</label> 
                                          <input type="text" class="form-control" name="txtBahasa" value="">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Tanggal Terbit :</label> 
                                          <input type="date" class="form-control" name="txtTgl" value="">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Berat Buku :</label> 
                                          <input type="text" class="form-control" name="txtBerat" value="">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Stok Tersedia :</label> 
                                          <input type="text" class="form-control" name="txtStok" value="">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Jumlah Halaman :</label> 
                                          <input type="text" class="form-control" name="txtHalaman" value="">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                          <label for="exampleInputName2">Harga Buku :</label> 
                                          <input type="text" class="form-control" name="txtHarga" value="">   
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                            <label for="exampleInputFile">Kategori Buku :</label>

                                            <select name="kategori">
                                              <option value="">Pilih Kategori</option>
                                              <option value="">=====================</option>
                                              <?php 
                                                  $get_kat=mysql_query("select kategori, id_kategori from k_buku");
                                                  while ($exe=mysql_fetch_array($get_kat)){
                                                    echo "<option value='$exe[1]'>".ucwords(str_replace("_"," ",$exe[0]))."</option>";
                                                }
                                              ?>
                                            </select> 
                                    </div>  
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                          <label for="exampleInputFile">Deskripsi :</label>
                                          <input type="text" name="txtDeskripsi" class="form-control" value="">
                                    </div>
                            </div>
                             <div class="col-md-3">
                                    <div class="form-group"> 
                                        <label for="exampleInputFile">Gambar Cover :</label> 
                                        <input type="file" name='txtCover'> 
                                        <p class="help-block">Tambahkan Gambar Preview Buku.</p> 
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="checkbox">Best Seller : </label> 
                                        <label>
                                        <input type="radio" name="bsell" value="1">
                                          Ya 
                                        </label>
                                        <label>
                                        <input type="radio" name="bsell" value="0">
                                          Tidak
                                        </label>
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

          function insert(){ 
          
            if(isset($_POST['btn_simpan'])){
                          
                        $id_buku=$_POST['id'];
                        $nama_buku=$_POST['txtJudul'];
                        $harga=$_POST['txtHarga'];

                        

                        $foto = $_FILES['txtCover']['tmp_name'];
                        $nm_foto = md5($foto).".png";
                          copy($foto,"../images/buku/" . $nm_foto);

                        $kategori=$_POST['kategori'];
                        $stok=$_POST['txtStok'];

                        
                        //field keterangan
                        $penulis= $_POST['txtPenulis'];
                        $halaman=$_POST['txtHalaman'];
                        $tgl_terbit=$_POST['txtTgl'];
                        $isbn=$_POST['txtIsbn'];
                        $bahasa=$_POST['txtBahasa'];
                        $penerbit=$_POST['txtPenerbit'];
                        $berat=$_POST['txtBerat'];
                        $deskripsi=$_POST['txtDeskripsi'];

                        $bsell=$_POST['bsell'];


                        
                        #if(!empty($id_buku) && !empty($nama_buku) && !empty( $harga) && !empty($foto) && !empty($kategori) && !empty($stok) && !empty( $penulis) && !empty($halaman) && !empty($tgl_terbit) && !empty($isbn) && !empty( $bahasa) && !empty($penerbit) && !empty($berat) && !empty($deskripsi) && !empty($bsell)){

                          $string = array($penulis, $halaman, $tgl_terbit, $isbn , $bahasa, $penerbit, $berat, $deskripsi);
                          $keterangan= implode("|", $string);


                          $insert= "'','".$nama_buku."','".$harga."','".$nm_foto."','".$kategori."','".$keterangan."','".$stok."','".$bsell."'";

                          $sql_insert = "INSERT into stok_buku VALUES (".$insert.")";

                          $exe = mysql_query($sql_insert);

                          echo "<script language='javascript'> alert ('Buku berhasil disimpan ....'); document.location='kelola_buku.php'; </script>";

                          #if($exe && isset($_GET['aksi'])){
                           # if($_GET['aksi'] == 'insert'){
                            #  header('location: index.php');
                            #}
                          #}
                        #} else {
                         # $pesan = "Data tidak lengkap!";
                        #}
                      }
          }

          function hapus(){

              if(isset($_GET['id_produk']) && isset($_GET['aksi'])){
                $id = $_GET['id_produk'];
                $sql_hapus = "DELETE FROM stok_buku WHERE id_produk=" . $id;
                $hapus = mysql_query($sql_hapus);
                echo "<script language='javascript'> alert ('Buku berhasil dihapus ....'); document.location='kelola_buku.php'; </script>";
                
                if($hapus){
                  if($_GET['aksi'] == 'hapus'){
                    header('location: index_admin.php');
                  }
                }
              }    
          }
        
		    
        //PROGRAM UTAMA UNTUK EKSEKUSI BERDASARKAN AKSI DIJALANKAN

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

	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>