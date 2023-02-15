<?php
  error_reporting(0);
    session_start();
    
    include "koneksi.php";
    include "variabel.php";
    include "kepala.php";

    if($_SESSION['admin'] || $_SESSION['user']){
        $_Akun=$_SESSION['user'];

      // memanggil data login tiap user

      $akun=mysqli_fetch_array(mysqli_query($koneksi,"select * from `user` where `UserName` ='$_Akun'"));
      // memanggil data login tiap user

      $biodata=mysqli_fetch_array(mysqli_query($koneksi,"select * from `pengajar` where `Nik_Pengajar` ='$_Akun'"));

?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <label><font color="white" face="arrial" size="6" style="
padding: 10px 5px 5px 15px;
float: right;">MIS KOMPA</font></label>
  <div style="
padding: 10px 50px 5px 50px;
float: right;">

                            
                        <a href="?page=akun&id=<?=$_Akun?>" title="Akun"><img style="border-radius: 200px; " width="50px" src="gambar/user/<?=$akun['Fhoto']?>" alt="Pengguna"></a>
                        <a onclick="return confirm('yakin ingin meninggalkan halaman ini?')" href="logout.php" class="btn btn-danger" title="Keluar"><i class="fa fa-power-off fa-2x"></i></a>
                        </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li><font color="white"> Selamat Datang Kembali <strong><?= $biodata['Nama_Pengajar'] ?></strong> </font></li>
                    <li>
                        <a  href="?page="><i class="fa fa-home fa-2x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="?page=pengajar"><i class="fa fa-laptop fa-2x"></i></i> Data Pengajar</a>
                    </li>
                    <li>
                        <a href="?page=siswa"><i class="fa fa-laptop fa-2x"></i> Data Siswa</a>
                     </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        
                        <?php

                            $page = $_GET['page'];
                            $aksi = $_GET['aksi'];


                            if ($page=="") 
                              {
                                include "home.php";
                              }
                        elseif ($page == "akun" ) 
                              {
                                if ($aksi == "") {
                                    include "admin1/akun/index.php";
                                }elseif ($aksi == "ubah_password") {
                                    include "admin1/akun/ubah_password.php";
                                }elseif ($aksi == "ubah_fhoto") {
                                    include "admin1/akun/ubah_fhoto.php";
                                }
                              }
                        elseif ($page == "baner" ) 
                              {
                                if ($aksi == "") {
                                    include "pengajar/baner/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "pengajar/baner/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "pengajar/baner/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "pengajar/baner/hapus.php";
                                }
                              }
                        elseif ($page == "logo" ) 
                              {
                                if ($aksi == "") {
                                    include "pengajar/logo/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "pengajar/logo/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "pengajar/logo/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "pengajar/logo/hapus.php";
                                }
                              }
                        elseif ($page == "galeri" ) 
                              {
                                if ($aksi == "") {
                                    include "pengajar/galeri/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "pengajar/galeri/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "pengajar/galeri/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "pengajar/galeri/hapus.php";
                                }
                              }
                        elseif ($page == "kepala_sekolah" ) 
                              {
                                if ($aksi == "") {
                                    include "pengajar/kepala_sekolah/index.php";
                                }elseif ($aksi == "detail") {
                                    include "pengajar/kepala_sekolah/detail.php";
                                }
                              }
                        elseif ($page == "admin" ) 
                              {
                                if ($aksi == "") {
                                    include "pengajar/admin/index.php";
                                }elseif ($aksi == "detail") {
                                    include "pengajar/admin/detail.php";
                                }
                              }
                        elseif ($page == "sekolah" ) 
                              {
                                if ($aksi == "") {
                                    include "pengajar/sekolah/index.php";
                                }
                              }
                        elseif ($page == "pengajar" ) 
                              {
                                if ($aksi == "") {
                                    include "pengajar/pengajar/index.php";
                                }
                              }
                        elseif ($page == "siswa" ) 
                              {
                                if ($aksi == "") {
                                    include "pengajar/siswa/index.php";
                                }elseif ($aksi == "detail") {
                                    include "pengajar/siswa/detail.php";
                                  }
                              }
                        elseif ($page == "rekapitulasi_ppdb" ) 
                              {
                                if ($aksi == "") {
                                    include "pengajar/rekapitulasi_ppdb/index.php";
                                }
                              }


                        ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->

<?php

    include "kaki.php";
    }else{
        header("location:login.php");
    }
?>