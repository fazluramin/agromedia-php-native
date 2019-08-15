<?php include"../modul/conn.php"; ?>

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

  <script type="text/javascript">
      window.print();
  </script>


    <P align="center">
        <img src="../images/kop_surat.PNG" />
    </P>
      <br>

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
                          </tr> 
                        </thead>

                        <?php 

                            

                            $sql=mysql_query("select id_produk, nama_produk, harga, photo, kategori, keterangan, stok_buku from stok_buku");

                            $no=0;
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
                            <td style="text-align: center;"><img src="../images/buku/<?php echo $foto;?>" width="60%" height="30%"></td>
                            <td><?php echo $nama_buku;?></td> 
                            <td><?php echo $penulis;?></td> 
                            <td><?php echo $tgl_terbit;?></td>
                            <td><?php echo number_format($harga);?></td> 
                            <td><?php echo $stok;?></td> 
                            <td><?php echo $isbn;?></td>
                            <td><?php echo $penerbit;?></td>  
                          </tr> 
                        
                        </tbody> 
                        <?php $no++; // Tambah 1 setiap kali looping

                        } 
                        
                        ?>
                      </table>