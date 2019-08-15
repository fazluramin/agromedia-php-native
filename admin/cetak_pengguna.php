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
                  <th style="text-align: center;">Nama Member</th>
                  <th style="text-align: center;">Alamat</th> 
                  <th style="text-align: center;">Nomor Handphone</th>
                  <th style="text-align: center;">E-mail</th>
                </tr> 
              </thead>

              <?php 
                  $sql=mysql_query("select * from member union select * from company");

                  $no=0;
                  while ($b=mysql_fetch_array($sql)){
                    $no=$no+1;

                    $nama=$b[0];
                    $alamat=$b[1];
                    $no_hp=$b[2];
                    $email=$b[3];
                  
              ?> 
              <tbody> 
                <tr> 
                  <th scope="row"><?php echo $no;?></th> 
                  <td style="text-align: center;"><?php echo $nama;?></td>
                  <td style="text-align: center;"><?php echo $alamat;?></td>
                  <td style="text-align: center;"><?php echo $no_hp;?></td>
                  <td style="text-align: center;"><?php echo $email;?></td> 
                </tr> 
              
              </tbody> 
              <?php }?>
            </table> 
