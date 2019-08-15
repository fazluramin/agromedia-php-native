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
                  <th>Nama Pembeli</th> 
                  <th>Nama Buku</th>
                  <th>Penulis</th>
                  <th>Jumlah Beli</th> 
                  <th>Stok Tersedia</th> 
                  <th>Tanggal Transaksi</th> 
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
                                            

                                            member.nama,
                                            stok_buku.photo,
                                            stok_buku.keterangan

                                    from    penjualan, stok_buku, member

                                    where   penjualan.id_produk=stok_buku.id_produk
                                    and     penjualan.id_pembeli=member.id
                                    and     penjualan.status not in ('cart')

                                    order by penjualan.status desc limit ".$limit_start.",".$limit); //not in ('cart')
                  $no = $limit_start + 1;
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
                    $nama=$b[9];
                    $foto=$b[10];
                    $string=$b[11];
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
                </tr> 
              
              </tbody> 
              <?php $no++; // Tambah 1 setiap kali looping
              }?>
            </table> 