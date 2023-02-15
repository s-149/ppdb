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
                        <a  href="?page=user"><i class="fa fa-users fa-2x"></i> Data User</a>
                    </li>
                    <li>
                        <a  href="?page=admin"><i class="fa fa-user fa-2x"></i> Data Admin</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-laptop fa-2x"></i> Data Sekolah<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a  href="?page=sekolah"></i>Data Sekolah</a></li>
                            <li><a  href="?page=kepala_sekolah"></i>Kepala Sekolah</a></li>
                            <li><a  href="?page=logo"></i>Logo Sekolah</a></li>
                            <li><a  href="?page=baner"></i>Baner PPDB</a></li>
                            <li><a  href="?page=galeri"></i>Galeri</a></li>
                        </ul>
                     </li>
                    <li>
                        <a  href="?page=pengajar"><i class="fa fa-laptop fa-2x"></i></i> Data Pengajar</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-laptop fa-2x"></i> Data Siswa<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a  href="?page=siswa"></i>Data Siswa</a></li>
                            <li><a  href="?page=kelas1"></i>Kelas 1</a></li>
                            <li><a  href="?page=kelas2"></i>Kelas 2</a></li>
                            <li><a  href="?page=kelas3"></i>Kelas 3</a></li>
                            <li><a  href="?page=kelas4"></i>Kelas 4</a></li>
                            <li><a  href="?page=kelas5"></i>Kelas 5</a></li>
                            <li><a  href="?page=kelas6"></i>Kelas 6</a></li>
                        </ul>
                     </li>
                    <li>
                        <a href="#"><i class="fa fa-laptop fa-2x"></i>PPDB<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a  href="?page=pendaftar"></i>Pendaftar</a></li>
                            <li><a  href="?page=ditolak"></i>Ditolak</a></li>
                            <li><a  href="?page=diterima"></i>Diterima</a></li>
                            <li><a  href="?page=pindah"></i>Pindah</a></li>
                            <li><a  href="?page=drop_out"></i>Drop Out</a></li>
                            <li><a  href="?page=berhenti"></i>Berhenti</a></li>
                            <li><a  href="?page=lulus"></i>Lulus</a></li>
                            <li><a  href="?page=rekapitulasi_ppdb"></i>Rekapitulasi PPDB</a></li>
                        </ul>
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
                        elseif ($page == "user" ) 
                              {
                                if ($aksi == "") {
                                    include "page/user/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/user/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/user/ubah.php";
                                }elseif ($aksi == "detail") {
                                    include "page/user/detail.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/user/hapus.php";
                                }elseif ($aksi == "ubah_password") {
                                    include "page/akun/ubah_password.php";
                                }elseif ($aksi == "ubah_fhoto") {
                                    include "page/akun/ubah_fhoto.php";
                                }
                              }
                        elseif ($page == "akun" ) 
                              {
                                if ($aksi == "") {
                                    include "page/akun/index.php";
                                }elseif ($aksi == "ubah_password") {
                                    include "page/akun/ubah_password.php";
                                }elseif ($aksi == "ubah_fhoto") {
                                    include "page/akun/ubah_fhoto.php";
                                }
                              }
                        elseif ($page == "baner" ) 
                              {
                                if ($aksi == "") {
                                    include "page/baner/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/baner/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/baner/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/baner/hapus.php";
                                }
                              }
                        elseif ($page == "logo" ) 
                              {
                                if ($aksi == "") {
                                    include "page/logo/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/logo/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/logo/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/logo/hapus.php";
                                }
                              }
                        elseif ($page == "galeri" ) 
                              {
                                if ($aksi == "") {
                                    include "page/galeri/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/galeri/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/galeri/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/galeri/hapus.php";
                                }
                              }
                        elseif ($page == "kepala_sekolah" ) 
                              {
                                if ($aksi == "") {
                                    include "page/kepala_sekolah/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/kepala_sekolah/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/kepala_sekolah/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/kepala_sekolah/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/kepala_sekolah/detail.php";
                                }
                              }
                        elseif ($page == "admin" ) 
                              {
                                if ($aksi == "") {
                                    include "page/admin/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/admin/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/admin/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/admin/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/admin/detail.php";
                                }
                              }
                        elseif ($page == "sekolah" ) 
                              {
                                if ($aksi == "") {
                                    include "page/sekolah/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/sekolah/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/sekolah/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/sekolah/hapus.php";
                                }
                              }
                        elseif ($page == "pengajar" ) 
                              {
                                if ($aksi == "") {
                                    include "page/pengajar/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/pengajar/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/pengajar/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/pengajar/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/pengajar/detail.php";
                                }
                              }
                        elseif ($page == "kelengkapan_data" ) 
                              {
                                if ($aksi == "") {
                                    include "page/kelengkapan_data/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/kelengkapan_data/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/kelengkapan_data/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/kelengkapan_data/hapus.php";
                                }
                              }
                        elseif ($page == "asal_mula_siswa" ) 
                              {
                                if ($aksi == "") {
                                    include "page/asal_mula_siswa/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/asal_mula_siswa/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/asal_mula_siswa/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/asal_mula_siswa/hapus.php";
                                }
                              }
                        elseif ($page == "orang_tua_siswa" ) 
                              {
                                if ($aksi == "") {
                                    include "page/orang_tua_siswa/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/orang_tua_siswa/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/orang_tua_siswa/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/orang_tua_siswa/hapus.php";
                                }
                              }
                        elseif ($page == "siswa" ) 
                              {
                                if ($aksi == "") {
                                    include "page/siswa/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/siswa/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/siswa/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/siswa/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/siswa/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/siswa/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/siswa/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubahuser") {
                                    include "page/siswa/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/siswa/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/siswa/rubah_tingkat1.php";
                                }
                              }
                        elseif ($page == "kelas1" ) 
                              {
                                if ($aksi == "") {
                                    include "page/kelas1/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/kelas1/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/kelas1/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/kelas1/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/kelas1/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/kelas1/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/kelas1/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/kelas1/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/kelas1/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/kelas1/rubah_tingkat1.php";
                                }
                              }
                        elseif ($page == "kelas2" ) 
                              {
                                if ($aksi == "") {
                                    include "page/kelas2/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/kelas2/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/kelas2/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/kelas2/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/kelas2/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/kelas2/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/kelas2/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/kelas2/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/kelas2/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/kelas2/rubah_tingkat1.php";
                                }
                              }
                        elseif ($page == "kelas3" ) 
                              {
                                if ($aksi == "") {
                                    include "page/kelas3/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/kelas3/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/kelas3/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/kelas3/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/kelas3/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/kelas3/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/kelas3/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/kelas3/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/kelas3/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/kelas3/rubah_tingkat1.php";
                                }
                              }
                        elseif ($page == "kelas4" ) 
                              {
                                if ($aksi == "") {
                                    include "page/kelas4/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/kelas4/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/kelas4/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/kelas4/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/kelas4/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/kelas4/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/kelas4/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/kelas4/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/kelas4/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/kelas4/rubah_tingkat1.php";
                                }
                              }
                        elseif ($page == "kelas5" ) 
                              {
                                if ($aksi == "") {
                                    include "page/kelas5/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/kelas5/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/kelas5/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/kelas5/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/kelas5/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/kelas5/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/kelas5/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/kelas5/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/kelas5/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/kelas5/rubah_tingkat1.php";
                                }
                              }
                        elseif ($page == "kelas6" ) 
                              {
                                if ($aksi == "") {
                                    include "page/kelas6/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/kelas6/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/kelas6/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/kelas6/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/kelas6/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/kelas6/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/kelas6/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/kelas6/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/kelas6/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/kelas6/rubah_tingkat1.php";
                                }
                              }
                        elseif ($page == "lulus" ) 
                              {
                                if ($aksi == "") {
                                    include "page/lulus/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/lulus/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/lulus/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/lulus/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/lulus/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/lulus/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/lulus/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/lulus/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/lulus/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/lulus/rubah_tingkat1.php";
                                }
                              }

                        elseif ($page == "ditolak" ) 
                              {
                                if ($aksi == "") {
                                    include "page/ditolak/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/ditolak/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/ditolak/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/ditolak/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/ditolak/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/ditolak/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/ditolak/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/ditolak/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/ditolak/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/ditolak/rubah_tingkat1.php";
                                }
                              }
                        elseif ($page == "pindah" ) 
                              {
                                if ($aksi == "") {
                                    include "page/pindah/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/pindah/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/pindah/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/pindah/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/pindah/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/pindah/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/pindah/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/pindah/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/pindah/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/pindah/rubah_tingkat1.php";
                                }
                              }
                        elseif ($page == "berhenti" ) 
                              {
                                if ($aksi == "") {
                                    include "page/berhenti/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/berhenti/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/berhenti/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/berhenti/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/berhenti/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/berhenti/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/berhenti/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/berhenti/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/berhenti/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/berhenti/rubah_tingkat1.php";
                                }
                              }

                        elseif ($page == "drop_out" ) 
                              {
                                if ($aksi == "") {
                                    include "page/drop_out/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/drop_out/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/drop_out/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/drop_out/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/drop_out/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/drop_out/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/drop_out/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/drop_out/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/drop_out/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/drop_out/rubah_tingkat1.php";
                                }
                              }

                        elseif ($page == "pendaftar" ) 
                              {
                                if ($aksi == "") {
                                    include "page/pendaftar/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/pendaftar/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/pendaftar/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/pendaftar/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/pendaftar/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/pendaftar/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/pendaftar/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/pendaftar/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/pendaftar/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/pendaftar/rubah_tingkat1.php";
                                }
                              }

                        elseif ($page == "diterima" ) 
                              {
                                if ($aksi == "") {
                                    include "page/diterima/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/diterima/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/diterima/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/diterima/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/diterima/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/diterima/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/diterima/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/diterima/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/diterima/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/diterima/rubah_tingkat1.php";
                                }
                              }


                        elseif ($page == "rekapitulasi_ppdb" ) 
                              {
                                if ($aksi == "") {
                                    include "page/rekapitulasi_ppdb/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/rekapitulasi_ppdb/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/rekapitulasi_ppdb/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/rekapitulasi_ppdb/hapus.php";
                                }elseif ($aksi == "detail") {
                                    include "page/rekapitulasi_ppdb/detail.php";
                                }elseif ($aksi == "tambah_kelengkapan") {
                                    include "page/rekapitulasi_ppdb/tambah_kelengkapan.php";
                                }elseif ($aksi == "hapus_kelengkapan") {
                                    include "page/rekapitulasi_ppdb/hapus_kelengkapan.php";
                                }elseif ($aksi == "rubah_akun") {
                                    include "page/rekapitulasi_ppdb/rubah_akun.php";
                                }elseif ($aksi == "rubah_tingkat") {
                                    include "page/rekapitulasi_ppdb/rubah_tingkat.php";
                                }elseif ($aksi == "rubah_tingkat1") {
                                    include "page/rekapitulasi_ppdb/rubah_tingkat1.php";
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
