<?php
    $koneksi = new mysqli("localhost","root","","ppdb");

    //include "function.php";
    include "variabel.php";
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SISTEM INFORMASI PPDB MIS KOMPA</title>
    <!-- Icon -->
    <link rel="icon" href="gambar/logo/logo.jpg">

	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
                <div class="row">
                    <div class="col-md-12">
                     	
                     	<?php

                     		$page = $_GET['page'];
                     		$aksi = $_GET['aksi'];


                     		if ($page=="") 
                              {
                                header("location:index.php");
                              }
                        elseif ($page == "user" ) 
                              {
                                if ($aksi == "semua") 
                                  {
                                    include "page/user/cetak.php";
                                  }
                                elseif ($aksi == "1") 
                                  {
                                    include "page/user/cetak1.php";
                                  }
                              }
                        elseif ($page == "siswa" ) 
                              {
                                if ($aksi == "semua") 
                                  {
                                    include "page/siswa/cetak_lengkap.php";
                                  }
                                elseif ($aksi == "1") 
                                  {
                                    include "page/siswa/cetak1.php";
                                  }
                              }
                        elseif ($page == "user" ) 
                              {
                                if ($aksi == "") 
                                  {
                                    include "page/user/cetak.php";
                                  }
                                elseif ($aksi == "1") 
                                  {
                                    include "page/user/cetak1.php";
                                  }
                              }

                     	?>
                       
                    </div>
                </div>

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script type="text/javascript">
      window.print();
    </script>
 
</body>
</html>
