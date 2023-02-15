<?php

//////////////////////////////////////////////////////////////////////////////
// induk sistem 
//////////////////////////////////////////////////////////////////////////////
  // kebutuhan
  include "koneksi.php";
  include "variabel.php";

session_start();
if (empty($_SESSION['user']) AND empty($_SESSION['password']))
    {
      session_start();
      session_destroy();
      header("Location: login.php");
    }
else 
    {
      $user = $_SESSION['user'];
      $level = $_SESSION['level'];

      // memanggil data login tiap user

      $akun=mysqli_fetch_array(mysqli_query($koneksi,"select * from `user` where `UserName` ='$user'"));

      // memanggil data tiap user

      $siswa=mysqli_fetch_array(mysqli_query($koneksi,"select * from `siswa` where `Nik_Siswa` ='$user'"));
                  
// **************************************************************************
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="<?=$author?>" >
    <meta name="keyword" content="<?=$keyword?>">

    <title><?=$title?></title>

    <!-- Icon -->
    <link rel="icon" href="<?=$icon?>">

    <!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/home/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/home/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="assets/home/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="assets/home/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="assets/home/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="assets/home/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="assets/home/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="assets/home/css/style.css">

    <!-- one scool -->
    <link rel="stylesheet" href="assets/oneschool/css/aos.css">
    <link rel="stylesheet" href="assets/oneschool/css/style.css">

    <!-- anon -->
    <!-- Theme style  -->
    <link rel="stylesheet" href="assets/anon/css/style.css">

    <!-- admin -->
    <!-- font awesome  -->
    <link href="assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

</head>

    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href=""> <img width="50px" src="<?=$icon?>" alt="logo"> </a> <?=$institusi?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a href="?pendaftar=" class="nav-link">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a href="?data_diri=&id=<?=$user ?>" class="nav-link">Data Diri</a>
                                </li>
                                <li class="nav-item">
                                    <a href="?perbarui=&id=<?=$user ?>" class="nav-link">Perbarui Data</a>
                                </li>
                                <li class="nav-item">
                                    <a href="?kelengkapan_berkas=&id=<?=$user ?>" class="nav-link">Kelengkapan Berkas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="cetak.php?page=siswa&aksi=1&id=<?=$user ?>" target="_blank" class="nav-link">Cetak Formulir</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="User" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img style="border-radius: 200px; " width="50px" src="gambar/user/<?=$akun['Fhoto']?>" alt="Pengguna">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="User">
                                        <a class="dropdown-item" href="?akun=">Akun</a>
                                        <a class="dropdown-item" href="index.php">Keluar</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

<?php
//////////////////////////////////////////////////////////////////////////////
    // perintah ini akan dijalankan jika pengguna pertama kali mengakses sistem
    if (isset($_GET['pendaftar'])) 
      {

           //konten
            include "siswa/beranda.php"; 

      }

//////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////
    // perintah ini akan dijalankan jika pengguna mengakses tombol login
    if (isset($_GET['data_diri'])) 
      {
           //konten
            include "siswa/data_diri.php";
      }

//////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////
    // perintah ini akan dijalankan jika pengguna mengakses tombol login
    if (isset($_GET['perbarui'])) 
      {
           //konten
            include "siswa/perbarui.php";
      }

//////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////
    // perintah ini akan dijalankan jika pengguna mengakses tombol login
    if (isset($_GET['cetak'])) 
      {

            include "siswa/cetak.php"; 

      }

//////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////
    // perintah ini akan dijalankan jika pengguna mengakses tombol login
    if (isset($_GET['akun'])) 
      {
           //konten
            include "siswa/akun.php"; 

      }
//////////////////////////////////////////////////////////////////////////////
      
//////////////////////////////////////////////////////////////////////////////
    // perintah ini akan dijalankan jika pengguna mengakses tombol login
    if (isset($_GET['kelengkapan_berkas'])) 
      {
           //konten
            include "siswa/kelengkapan_berkas.php"; 

      }
//////////////////////////////////////////////////////////////////////////////
      
//////////////////////////////////////////////////////////////////////////////
    // perintah ini akan dijalankan jika pengguna mengakses tombol login
    if (isset($_GET['tambah_kelengkapan_berkas'])) 
      {
           //konten
            include "siswa/tambah_kelengkapan_berkas.php"; 

      }
//////////////////////////////////////////////////////////////////////////////
      
//////////////////////////////////////////////////////////////////////////////
    // perintah ini akan dijalankan jika pengguna mengakses tombol login
    if (isset($_GET['hapus_kelengkapan_berkas'])) 
      {
           //konten
            include "siswa/hapus_kelengkapan_berkas.php"; 

      }
//////////////////////////////////////////////////////////////////////////////
?>


        <section class="footer-area" id="kontak">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Kontak Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xl-6">
                    <h3><i class="fas fa-phone-square"></i> Kontak Aktif :</h3>
                    <div class="contact_info">
                        <p><span> Kantor :</span> 0266-7161067</p>

                        <p><span> Ibu Lilis :</span> 0852-8932-9123 
                            <a class="cta-btn align-middle" target="_blank" href="https://api.whatsapp.com/send?phone=+6285289329123"><i class="fab fa-whatsapp-square"></i></a>
                            <a class="cta-btn align-middle" href="tel:+62-852-8932-9123"><i class="fas fa-phone"></i></a>
                        </p>

                        <p><span> Ibu Lia :</span> 0815-1442-5099 
                            <a class="cta-btn align-middle" target="_blank" href="https://api.whatsapp.com/send?phone=+6281514425099"><i class="fab fa-whatsapp-square"></i></a>
                            <a class="cta-btn align-middle" href="tel:+62-815-1442-5099"><i class="fas fa-phone"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-6">
                    <h3><i class="fas fa-map-marker-alt"></i>Alamat : </h3>
                    <p align="justify">&nbsp;&nbsp;&nbsp;Jl. Raya Parungkuda Km. 30 No. 8 Desa Kompa - Kecamatan Parungkuda - Kabupaten Sukabumi - Provinsi Jawa Barat.<br> Kode Pos. 43357
                    </p>
                    <p>Lokasi Kami Berdasarkan Google Map.</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.7833256706851!2d106.76234618344766!3d-6.822440016204213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6832e895555555%3A0xfd680e2bee90f2dd!2sMadrasah%20Ibtidaiyah%20Swasta%20(MIS)%20Kompa!5e0!3m2!1sid!2sid!4v1613905967675!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="">
        <div class="container-fluid">
            <div class="copyright_part_text text-center">
                <div class="row" style="background-color: black;">
                    <div class="col-lg-12">
                        <p class="footer-text m-0"><br>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script><br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="assets/home/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="assets/home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/home/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="assets/home/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="assets/home/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="assets/home/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="assets/home/js/owl.carousel.min.js"></script>
    <script src="assets/home/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="assets/home/js/slick.min.js"></script>
    <script src="assets/home/js/jquery.counterup.min.js"></script>
    <script src="assets/home/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="assets/home/js/custom.js"></script>

    <!-- oneschool -->
    <script src="assets/oneschool/js/aos.js"></script>
    <script src="assets/oneschool/js/main.js"></script>
</body>

</html>



 <?php 
//////////////////////////////////////////////////////////////////////////////
// kurawal tutup session
   } 
//////////////////////////////////////////////////////////////////////////////
     
// **************************************************************************



?>