<?php
    include "koneksi.php";
    include "variabel.php";
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
    <link rel="shortcut icon" href="<?=$icon?>" type="image/x-icon">

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

<body>
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
                                    <a href="#beranda" class="nav-link">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tentang" class="nav-link">Tentang</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#program" class="nav-link">Program</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pengajar" class="nav-link">Pengajar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#galeri" class="nav-link">Galeri</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        PPDB
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#ppdb">PPDB</a>
                                        <a class="dropdown-item" href="?formulir">Daftar Online</a>
                                        <a class="dropdown-item" href="#daftar">Pengumuman</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#kontak" class="btn_1"><i class="fas fa-phone-volume"></i> Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class=" advance_feature learning_part" id="beranda">
        <div class="container">
            <div class="row>
                <div class="col-md-12 col-lg-12">
                    <div class="row mb-5 align-items-center">
                        <div class=" col-lg-6 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                            <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <img src="gambar/baner/<?= $baner['Fhoto']?>" alt="baner" class="img-fluid">
                            </figure>
                        </div>
                        </div>
                        <div class="col-lg-6 mr-auto order-2 order-lg-1"  data-aos="fade-up" data-aos-delay="200" >
                            <div class="single_feature_text ">
                                <h1><?= $sekolah['NamaSekolah'] ?></h1>
                                <h3>TERAKREDITASI <?= $sekolah['Terakreditasi'] ?></h3>
                            </div>
                            <p>
                                <div style="text-align: center;">
                                    <span style="font-size: x-large;">
                                        <marquee bgcolor="black" style="color: red;" direction="left" width="100%">
                                            <b>&lt;&lt;</b><b> Selamat Datang di Sistem PPDB MIS Kompa. &gt;&gt;</b>
                                        </marquee>
                                    </span>
                                </div>
                            </p>
                            <p><a href="login.php" class="btn_1">Login Sekarang <i class="fas fa-sign-in-alt"></i></a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature_part" id="tentang">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-12 align-self-center">
                    <div class="single_feature_text "><br>
                        <h2>Tentang</h2>
                        <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?= $sekolah['Biografi'].'.' ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-6">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>VISI</h4>
                            <p>
                                <font color="black"><i>
                                    <?= ' " '.$sekolah['Visi'].' ."' ?>
                                </i></font>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-6">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>MISI</h4>
                            <p>
                                <font color="black"><i>
                                    <?= ' " '.$sekolah['Misi'].' ."' ?>
                                </i></font>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>

    <section class="">
        <div class="site-section bg-image overlay" style="background-image: url('gambar/background/bg2.jpg');">
            <div class="container">
                <?php
                    $sql="SELECT * FROM `kepala_sekolah` where `Status`='aktif' ";
                    $query=mysqli_query($koneksi,$sql);
                        while ($data=mysqli_fetch_array($query)) { 
                            $nik=$data['Nik_Pengajar'];
                            $akun=mysqli_fetch_array(mysqli_query($koneksi,"select * from `user` where `UserName` ='$nik'"));
                            $data1=mysqli_fetch_array(mysqli_query($koneksi,"select * from `pengajar` where `Nik_Pengajar` ='$nik'"));
                            ?>
                            <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                                <div class="course  col-md-8 text-center testimony">
                                    <figure class="m-0">
                                        <img src="gambar/user/<?= $akun['Fhoto']?>" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                                    </figure>
                                        <h3 class="mb-4">
                                            <font color="silver">
                                                <?= $data1['Nama_Pengajar']?>
                                            </font> 
                                        </h3>
                                    <blockquote>
                                        <p>&ldquo; Lahir di <?= $data1['Tempat_Lahir']?>, Menjabat sebagai Kepala Sekolah di MIS Kompa. &rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>

                <?php } ?>

                <div class="member_counter row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_member_counter">
                            <span class="counter"><?=$jml_pengajar?></span>
                            <h4>Pengajar</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_member_counter">
                            <span class="counter">387</span>
                            <h4> Siswa Aktif</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_member_counter">
                            <span class="counter">12000</span>
                            <h4>Siswa telah diluluskan</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="learning_part" id="program">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Program</h2>

                    </div>
                </div>
            </div>
            <div class="row mb-5 align-items-center">
                <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="gambar/background/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-black mb-4">Mengajar secara Online</h2>
                    <p class="mb-4"align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dari masa kemasa kami selalu mengupgrade metode belajar agar siswa tidak merasa bosan saat mendengarkan materi, sehingga dengan memanfaatkan teknologi yg semakin canggih membuat kami lebih kreatif dalam menjalankan metode belajar yg lebih mudah diakses dan lebih efisien.</p>
                </div>
            </div>

            <div class="row mb-5 align-items-center">
                <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="gambar/background/undraw_teaching.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-black mb-4">Mengajar Secara Offline</h2>
                    <p class="mb-4"align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tentunya Metode Mengajar secara offline akan dapat dengan mudah mengetahui karakter tiap peserta didik, tentunya metode mengajarnya pun tidak kalah menyengangkan dan membuat peserta didik merasa nyaman saat mendengarkan dan dengan mudah menyerap dan memahami materi yg telah disampaikan oleh pengajar/guru.</p>
                </div>
            </div>

            <div class="row mb-5 align-items-center">
                <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="gambar/background/undraw_teacher.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-black mb-4">Gaya Penyampaian</h2>
                    <p class="mb-4"align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kami selalu berusaha memberikan pelayanan terbaik bagi para siswa atau pun pihak lainnya dalam menyampaikan segala sesuatu yg telah didasari dengan pemikiran yg matang agar dapat dengan mudah dimengerti dan direalisasikan, untuk itu kami selalu mengadakan meeting tiap satu bulan sekali untuk menjadikan sekolah kami lebih berkembang dan memotivasi setiap pihak yg terkait agar lebih bijak dan profesional dalam mengmbil langkah dan keputusan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="special_cource padding_top" id="pengajar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Pengajar</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
                    <p class="mb-5">Seluruh Tenaga Pengajar disekolah kami Telah dibekali dengan mentode mengajar yg baik dan profesional, Sehingga membuat Peserta didik merasa nyaman dan tidak merasa bosan saat Kegiatan belajar mengajar berlangsung.</p>
                </div>
            </div>
            <div class="row">

                <?php
                    $sql1="SELECT * FROM `pengajar` ";
                    $query1=mysqli_query($koneksi,$sql1);
                        while ($data=mysqli_fetch_array($query1)) { 
                            $nik=$data['Nik_Pengajar'];
                            $akun=mysqli_fetch_array(mysqli_query($koneksi,"select * from `user` where `UserName` ='$nik'"));
                            ?>
                            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="course teacher text-center">
                                    <figure class="m-0">
                                        <img src="gambar/user/<?= $akun['Fhoto']?>" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                                    </figure>
                                    <div class="py-2">
                                        <h3 class="text-black"><?= $data['Nama_Pengajar']?></h3>
                                        <p class="position"><?= $data['Jabatan']?></p>
                                    </div>
                                    <a class="fas fa-eye" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <b>
                                        <h3 class="text-black"><?= $data['Nama_Pengajar']?></h3>
                                        <p>Lahir di<?= $data['Tempat_Lahir']?>, <?= $data['Tanggal_Lahir']?></p>
                                        <p>Alamat : <?= $data['Alamat']?></p>
                                        <p>Telp : <?= $data['No_Hp']?></p></b>

                                    </div>
                                </div>
                            </div>
                <?php } ?>

            </div>
        </div>
    </section>

    <section class="testimonial_part" id="galeri">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center"><br><br><br>
                        <h2>GALERI</h2>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel text-center">

                        <?php
                            $sql="SELECT * FROM `galeri`";
                            $query=mysqli_query($koneksi,$sql);
                                while ($data=mysqli_fetch_array($query)) { ?>

                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="course bg-white h-100 align-self-stretch">
                                        <figure class="m-0">
                                            <img width="350px" src="gambar/galeri/<?=$data['Fhoto']?>" alt="galeri" class="img-fluid">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section><br>

    <section class="blog_part section_padding" id="ppdb" style="background-color: silver" >
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Penerimaan Peserta Didik Baru</p>
                        <h2>PPDB</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="timeline-centered">

                        <article class="timeline-entry animate-box">
                            <div class="timeline-entry-inner">
                                <div class="timeline-icon">                        
                                </div>
                                <div class="timeline-label">
                                    <h2>ALUR PPDB</h2>
                                </div>
                            </div>
                        </article>

                        <article class="timeline-entry animate-box">
                            <div class="timeline-entry-inner">
                                <div class="timeline-icon"> 1                       
                                </div>
                                <div class="timeline-label">
                                    <h2>Mulai</h2>
                                    <p>
                                        Ikuti Langkah-Langkah dibawah :
                                    </p>
                                </div>
                            </div>
                        </article>

                        <article class="timeline-entry animate-box">
                            <div class="timeline-entry-inner">
                                <div class="timeline-icon"> 2                        
                                </div>
                                <div class="timeline-label">
                                    <h2>Siapkan Kelengkapan Data</h2>
                                    <p>
                                        BERKAS KELENGKAPAN DATA PENDAFTARAN SISWA BARU MIS KOMPA TAHUN PELAJARAN 2020/2021<br>
                                        1. Foto Copy Kartu Keluarga<br>
                                        2. Foto Copy KTP Orangtua (ayah ibu)<br>
                                        3. Foto Copy AKTA Lahir<br>
                                        4. Foto Copy STTB RA/TK/PAUD (Jika Ada)<br>
                                        5. Foto Copy KIP/KKS ( Jika ada )
                                    </p>
                                </div>
                            </div>
                        </article>

                        <article class="timeline-entry animate-box">
                            <div class="timeline-entry-inner">
                                <div class="timeline-icon">3                         
                                </div>
                                <div class="timeline-label">
                                    <h2>Mendaftar</h2>
                                    <p>
                                        Sistem PPDB disekolah kami dapat dilakukan secara konvensional (mendatangi langsung ke sekolah) dan secara online, dengan mengakses Link,
                                        <a href="http://bit.ly/PPDB-MI-Kompa" target="_blank">http://bit.ly/PPDB-MI-Kompa.</a>
                                    </p>
                                    <p>
                                        Atau langsung di sini, 
                                        <a href="?formulir" >Mendaftar Sekarang</a>
                                    </p>
                                </div>
                            </div>
                        </article>

                        <article class="timeline-entry animate-box">
                            <div class="timeline-entry-inner">
                                <div class="timeline-icon"> 4                               
                                </div>
                                <div class="timeline-label">
                                    <h2>Mengisi Formulir PPDB</h2>
                                    <p>
                                        Mengisi Formulir PPDB secara lengkap.
                                    </p>
                                </div>
                            </div>
                        </article>

                        <article class="timeline-entry animate-box">
                            <div class="timeline-entry-inner">
                                <div class="timeline-icon"> 5                               
                                </div>
                                <div class="timeline-label">
                                    <h2>Menyerahkan Berkas </h2>
                                    <p>
                                        Menyerahkan Berkas berupa, Formulir Pendaftaran Peserta Didik dan Kelengkapan Data yang telah disiapkan sebelumnya.
                                    </p>
                                    <p>
                                        Jika ingin mencetak Formulir yg telah di isi sebelumnya, silahkan akses halaman cetak Formulir di atas pada menu PPDB dengan login terlebih dahulu menggunakan username = Nik siswa dan password yg telah didaftarkan pada pada halaman register.
                                    </p>
                                </div>
                            </div>
                        </article>

                        <article class="timeline-entry animate-box">
                            <div class="timeline-entry-inner">
                                <div class="timeline-icon">6                        
                                </div>
                                <div class="timeline-label">
                                    <h2>Selesai</h2>
                                    <p>
                                        Tunggu pengumuman.
                                    </p>
                                </div>
                            </div>
                        </article>

                        <article class="timeline-entry begin animate-box">
                            <div class="timeline-entry-inner">
                                <div class="timeline-icon"></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

<?php if (isset($_GET['formulir'])) { ?>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="course bg-white h-100 align-self-stretch">
                        <figure class="m-0">                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>FORMULIR PPDB MIS KOMPA</strong> 
                                        <p>Biodata Calon Siswa : </p>
                                    </div>
                                    <div class="card-body card-block">
                                       
            <form action="" method="POST" enctype="multipart/form-data" >

                <h4>Data Calon :</h4>
                <div class="form-group">
                    <label> Nik</label>
                    <input type="number" class="form-control" name="Nik_Siswa"  required autofocus />
                </div>     

                <div class="form-group">
                    <!--label> Nis</label-->
                    <input type="hidden" class="form-control" name="Nis" value="0"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Nisn (jika ada/pindahan)</label>
                    <input type="text" class="form-control" name="Nisn" />
                </div>
                
                <div class="form-group">
                    <label> Nama Lengkap</label>
                    <input type="text" class="form-control" name="Nama_Lengkap"  required autofocus />
                </div>

                <div class="form-group">
                    <label> Nama Panggilan</label>
                    <input type="text" class="form-control" name="Nama_Panggilan" required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Jenis Kelamin</label>
                    <select class="form-control" name="Jenis_Kelamin"  required autofocus>
                        <option>L</option>
                        <option>P</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label> Tempat Lahir</label>
                    <input type="text" class="form-control" name="Tempat_Lahir"  required autofocus/>
                </div>
                
                <div class="form-group">
                    <label> Tanggal Lahir</label>
                    <input type="date" class="form-control" name="Tanggal_Lahir"  required autofocus />
                </div>
                                
                <div class="form-group">
                    <label> Agama</label>
                    <input type="text" class="form-control" name="Agama"  required autofocus>
                </div>
                
                <div class="form-group">
                    <label> Kewarganegaraan</label>
                    <select class="form-control" name="Kewarganegaraan"  required autofocus>
                        <option>WNI</option>
                        <option>WNA</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label> Anak Ke</label>
                    <input type="number" class="form-control" name="Anak_Ke"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Banyak Saudara Kandung</label>
                    <input type="number" class="form-control" name="Banyak_Saudara_Kandung"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Banyak Saudara Tiri</label>
                    <input type="number" class="form-control" name="Banyak_Saudara_Tiri"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Banyak Saudara Angkat</label>
                    <input type="number" class="form-control" name="Banyak_Saudara_Angkat"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Bahasa Sehari Hari</label>
                    <select class="form-control" name="Bahasa_Sehari_Hari"  required autofocus>
                        <option>Bahasa Sunda</option>
                        <option>Bahasa Indonesia</option>
                        <option>Bahasa Asing</option>
                        <option>Bahasa Campuran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label> Berat Badan (KG)</label>
                    <input type="number" class="form-control" name="Berat_Badan"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Tinggi Badan (CM)</label>
                    <input type="number" class="form-control" name="Tinggi_Badan"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Golongan Darah</label>
                    <input type="text" class="form-control" name="Golongan_Darah"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Penyakit Yang Pernah Diderita</label>
                    <input type="text" class="form-control" name="Penyakit_Yang_Pernah_Diderita"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Tinggal Bersama</label>
                    <input type="text" class="form-control" name="Tinggal_Bersama"  required autofocus />
                </div>
                <div class="form-group">
                    <label> Jarak Rumah Ke Sekolah</label>
                    <select class="form-control" name="Jarak_Rumah_Ke_Sekolah"  required autofocus>
                        <option>100 m</option>
                        <option><100 m</option>
                        <option>>100 m</option>
                    </select>
                </div>
                <div class="form-group">
                    <label> Alamat Rumah</label>
                    <textarea class="form-control" name="Alamat_Rumah"  required autofocus ></textarea>
                </div>
                <div class="form-group">
                    <label> Status Siswa</label>
                    <input type="text" class="form-control" name="Status_Siswa" value="baru"  required autofocus readonly />
                </div>
                <div class="form-group">
                    <label> Kelas Tujuan</label>
                    <select class="form-control" name="Kelas"  required autofocus>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                <div class="form-group">
                    <label> Tanggal Mendaftar</label>
                    <input type="text" class="form-control" name="Tanggal_Mendaftar" value="<?php echo date('d-M-Y'); ?>"  required autofocus readonly />
                </div>
                <div class="form-group">
                    <label> TA</label>
                    <input type="text" class="form-control" name="TA" value="<?php echo date('Y'); ?>"  required autofocus readonly />
                </div>

                <h4>Data Orang Tua :</h4>


                <div class="form-group">
                    <label> Nik Ayah</label>
                    <input type="number" class="form-control" name="Nik_Ayah"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Nama Ayah</label>
                    <input type="text" class="form-control" name="Nama_Ayah"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Pendidikan Tertinggi Ayah</label>
                    <input type="text" class="form-control" name="Pendidikan_Tertinggi_Ayah"  required autofocus />
                </div>

                <div class="form-group">
                    <label> Pekerjaan Ayah</label>
                    <input type="text" class="form-control" name="Pekerjaan_Ayah" required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Nik Ibu</label>
                    <input type="number" class="form-control" name="Nik_ibu"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Nama Ibu</label>
                    <input type="text" class="form-control" name="Nama_Ibu"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Pendidikan Tertinggi Ibu</label>
                    <input type="text" class="form-control" name="Pendidikan_Tertinggi_Ibu"  required autofocus />
                </div>
                                
                <div class="form-group">
                    <label> Pekerjaan Ibu</label>
                    <input type="text" class="form-control" name="Pekerjaan_Ibu"  required autofocus>
                </div>
                
                <div class="form-group">
                    <label> Nama Wali Murid</label>
                    <input type="text" class="form-control" name="Nama_Wali_Murid" />
                </div>
                
                <div class="form-group">
                    <label> Pendidikan Tertinggi Wali Murid</label>
                    <input type="text" class="form-control" name="Pendidikan_Tertinggi_Wali_Murid" />
                </div>
                <div class="form-group">
                    <label> Hubungan Terhadap Anak</label>
                    <input type="text" class="form-control" name="Hubungan_Terhadap_Anak" />
                </div>
                <div class="form-group">
                    <label> Pekerjaan Wali Murid</label>
                    <input type="text" class="form-control" name="Pekerjaan_Wali_Murid" />
                </div>
                <div class="form-group">
                    <label> No KK</label>
                    <input type="text" class="form-control" name="No_KK"  required autofocus />
                </div>
                <div class="form-group">
                    <label> No Hp</label>
                    <input type="number" class="form-control" name="No_Hp"  required autofocus>
                </div>

                <h4>Data Asal Calon : </h4>

                <div class="form-group">
                    <label> Masuk Ke Sekolah Ini Sebagai</label>
                    <select class="form-control" name="Masuk_Ke_Sekolah_Ini_Sebagai"  required autofocus>
                        <option>Siswa_Baru</option>
                        <option>Pindah_Sekolah</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label> Asal Mula Sekolah Anak</label>
                    <select class="form-control" name="Asal_Mula_Sekolah_Anak"  required autofocus>
                        <option>dirumah</option>
                        <option>RA/TK/Sederajat</option>
                        <option>MI/SD/Sederajat</option>
                    </select>
                </div>
                <h3>Diisi jika pendaftar telah mengikuti pendidikan sebelumnya.</h3>
                <div class="form-group">
                    <label> Nama Pendidikan Sebelumnya</label>
                    <input type="text" class="form-control" name="Nama_Pendidikan_Sebelumnya">
                </div>

                <div class="form-group">
                    <label> Pindahan: </label>
                </div>
                
                <div class="form-group">
                    <label> Nisn</label>
                    <input type="number" class="form-control" name="Nisn" >
                </div>
                
                <div class="form-group">
                    <label> Dari Tingkat</label>
                    <select class="form-control" name="Dari_Tingkat" >
                        <option value="">--Pilih--</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                
                <h4>Berkas kelengkapan (Fhoto KK/Akte lahir dll) :</h4>

                <div class="form-group">
                    <label>File Berkas</label>
                    <input type="file" name="foto" id="foto" required autofocus />
                </div>                

                <div>
                    <input type="submit" name="daftar_online" value="Serahkan" class="btn btn-primary">
                </div>
         </div>

         </form>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div><br>
<?php } ?>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="course bg-white h-100 align-self-stretch">
                        <figure class="m-0">                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Pendaftar Baru</strong> 
                                        <p>Akun default pendaftar baru adalah username=nik dan password=tgl lahir(tahun,bulan,tanggal) tanpa koma, contoh: username=3202XXXX dan password=19960426.</p>
                                        <p>Harap segera login dan perbarui akun pendaftar agar akun dan data pribadi terjaga dari hal yang tidak di inginkan.</p>
                                        <p>gunakan akun diatas untuk login dan pendaftar dapat memperbarui biodata masing-masing.</p>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="table-responsive table--no-card m-b-30">
                                            <table  class="table table-borderless table-striped table-earning" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Fhoto</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Nama Panggilan</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Alamat</th>
                                                        <th>Kelas</th>
                                                            
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                        <?php
                                                        $no=1;
                                                        $sql="select * from `siswa` where Status_Siswa='baru' ";
                                                        $query=mysqli_query($koneksi,$sql);
                                                        while($data=mysqli_fetch_array($query)) { 
                                                        ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <?php 
                                                            $Nik_Siswa= $data['Nik_Siswa'];
                                                            $akun=mysqli_fetch_array(mysqli_query($koneksi,"select * from `user` where `UserName` =$Nik_Siswa "));
                                                            ?>
                                                            <td><img width="75px" src="gambar/user/<?=$akun['Fhoto']?>" alt="Fhoto"></td>
                                                            <td><?= $data['Nama_Lengkap'] ?></td>
                                                            <td><?= $data['Nama_Panggilan'] ?></td>
                                                            <td><?= $data['Jenis_Kelamin'] ?></td>
                                                            <td><?= $data['Alamat_Rumah']?></td>
                                                            <td><?= $data['Kelas'] ?></td>

                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog_part section_padding" id="daftar"  >
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>PENGUMUMAN PPDB</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="gambar/background/banner.png" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-4 mr-auto order-2 order-lg-1"  data-aos="fade-up" data-aos-delay="100">
                    <h2 class="text-black mb-4">
                        Tunggu Pengumuman
                    </h2>
                    <p align="justify">
                        Setelah selesai melakukan Registrasi PPDB, kami akan segera memproses data yg telah masuk ke sistem kami, mohon bersabar dan Silahkan untuk menunggu pengumuman yang akan kami tampilkan pada papan pengumuman dibawah.
                        Selamat bagi nama atau biodata pada papan pengumuman dibawah adalah list Pendaftar PPDB yg telah diterima sebagai Peserta Didik Baru di MIS KOMPA.
                    </p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="course bg-white h-100 align-self-stretch">
                        <figure class="m-0">                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Pengumuman PPDB</strong> 
                                        <p></p>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="table-responsive table--no-card m-b-30">
                                            <table  class="table table-borderless table-striped table-earning">
                                                <thead>
                                                    <tr>
                                                        <th>No Pendaftaran</th>
                                                        <th>Fhoto</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Nama Panggilan</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Alamat</th>
                                                        <th>Kelas</th>
                                                        <th>Status</th>
                                                            
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                        <?php
                                                        $no=1;
                                                        $sql="select * from `siswa` where `Status_Siswa`='diterima' ";
                                                        $query=mysqli_query($koneksi,$sql);
                                                        while($data=mysqli_fetch_array($query)) { 
                                                        ?>
                                                        <tr>
                                                            <td><?= $data['TA'] ?>-<?= $no++ ?></td>
                                                            <?php 
                                                            $Nik_Siswa= $data['Nik_Siswa'];
                                                            $akun=mysqli_fetch_array(mysqli_query($koneksi,"select * from `user` where `UserName` =$Nik_Siswa "));
                                                            ?>
                                                            <td><img width="75px" src="gambar/user/<?=$akun['Fhoto']?>" alt="Fhoto"></td>
                                                            <td><?= $data['Nama_Lengkap'] ?></td>
                                                            <td><?= $data['Nama_Panggilan'] ?></td>
                                                            <td><?= $data['Jenis_Kelamin'] ?></td>
                                                            <td><?= $data['Alamat_Rumah']?></td>
                                                            <td><?= $data['Kelas'] ?></td>
                                                            <td><?= $data['Status_Siswa'] ?></td>

                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </section>

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

 if (isset($_POST['daftar_online'])) {
     # code...
// data siswa
    $Nik_Siswa = $_POST ['Nik_Siswa'];
    $Nis = $_POST ['Nis'];
    $Nisn = $_POST ['Nisn'];
    $Nama_Lengkap = $_POST ['Nama_Lengkap'];
    $Nama_Panggilan = $_POST ['Nama_Panggilan'];
    $Jenis_Kelamin = $_POST ['Jenis_Kelamin'];
    $Tempat_Lahir = $_POST ['Tempat_Lahir'];
    $Tanggal_Lahir = $_POST ['Tanggal_Lahir'];
    $Agama = $_POST ['Agama'];
    $Kewarganegaraan = $_POST ['Kewarganegaraan'];
    $Anak_Ke = $_POST ['Anak_Ke'];
    $Banyak_Saudara_Kandung = $_POST ['Banyak_Saudara_Kandung'];
    $Banyak_Saudara_Tiri = $_POST ['Banyak_Saudara_Tiri'];
    $Banyak_Saudara_Angkat = $_POST ['Banyak_Saudara_Angkat'];
    $Bahasa_Sehari_Hari = $_POST ['Bahasa_Sehari_Hari'];
    $Berat_Badan = $_POST ['Berat_Badan'];
    $Tinggi_Badan = $_POST ['Tinggi_Badan'];
    $Golongan_Darah = $_POST ['Golongan_Darah'];
    $Penyakit_Yang_Pernah_Diderita = $_POST ['Penyakit_Yang_Pernah_Diderita'];
    $Tinggal_Bersama = $_POST ['Tinggal_Bersama'];
    $Jarak_Rumah_Ke_Sekolah = $_POST ['Jarak_Rumah_Ke_Sekolah'];
    $Alamat_Rumah = $_POST ['Alamat_Rumah'];
    $Status_Siswa = $_POST ['Status_Siswa'];
    $Kelas = $_POST ['Kelas'];
    $Tanggal_Mendaftar = $_POST ['Tanggal_Mendaftar'];
    $TA = $_POST ['TA'];
    $No_Pendaftaran = $_POST ['No_Pendaftaran'];

// data orang tua

    $Nik_Ayah = $_POST ['Nik_Ayah'];
    $Nama_Ayah = $_POST ['Nama_Ayah'];
    $Pendidikan_Tertinggi_Ayah = $_POST ['Pendidikan_Tertinggi_Ayah'];
    $Pekerjaan_Ayah = $_POST ['Pekerjaan_Ayah'];
    $Nik_ibu = $_POST ['Nik_ibu'];
    $Nama_Ibu = $_POST ['Nama_Ibu'];
    $Pendidikan_Tertinggi_Ibu = $_POST ['Pendidikan_Tertinggi_Ibu'];
    $Pekerjaan_Ibu = $_POST ['Pekerjaan_Ibu'];
    $Nama_Wali_Murid = $_POST ['Nama_Wali_Murid'];
    $Pendidikan_Tertinggi_Wali_Murid = $_POST ['Pendidikan_Tertinggi_Wali_Murid'];
    $Hubungan_Terhadap_Anak = $_POST ['Hubungan_Terhadap_Anak'];
    $Pekerjaan_Wali_Murid = $_POST ['Pekerjaan_Wali_Murid'];
    $No_KK = $_POST ['No_KK'];
    $No_Hp = $_POST ['No_Hp'];

// data asal sekolah

    $Masuk_Ke_Sekolah_Ini_Sebagai = $_POST ['Masuk_Ke_Sekolah_Ini_Sebagai'];
    $Asal_Mula_Sekolah_Anak = $_POST ['Asal_Mula_Sekolah_Anak'];
    $Nama_Pendidikan_Sebelumnya = $_POST ['Nama_Pendidikan_Sebelumnya'];
    $Nisn = $_POST ['Nisn'];
    $Dari_Tingkat = $_POST ['Dari_Tingkat'];

// kelengkapan berkas

    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];

    $folder='gambar/kelengkapan_data/';
    $gambar=date('d_M_Y_h_i_s').'_'.$foto;
    $upload = move_uploaded_file($lokasi,$folder.$gambar);

// password
    $pass= str_replace("-", "", $Tanggal_Lahir);

        // data siswa
        $sql = $koneksi->query("INSERT INTO `siswa`(`Nik_Siswa`, `Nis`, `Nisn`, `Nama_Lengkap`, `Nama_Panggilan`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Agama`, `Kewarganegaraan`, `Anak_Ke`, `Banyak_Saudara_Kandung`, `Banyak_Saudara_Tiri`, `Banyak_Saudara_Angkat`, `Bahasa_Sehari_Hari`, `Berat_Badan`, `Tinggi_Badan`, `Golongan_Darah`, `Penyakit_Yang_Pernah_Diderita`, `Tinggal_Bersama`, `Jarak_Rumah_Ke_Sekolah`, `Alamat_Rumah`, `Status_Siswa`, `Kelas`, `Tanggal_Mendaftar`, `TA`, `No_Pendaftaran`) VALUES('$Nik_Siswa', '$Nis', '$Nisn', '$Nama_Lengkap', '$Nama_Panggilan', '$Jenis_Kelamin', '$Tempat_Lahir', '$Tanggal_Lahir', '$Agama', '$Kewarganegaraan', '$Anak_Ke', '$Banyak_Saudara_Kandung', '$Banyak_Saudara_Tiri', '$Banyak_Saudara_Angkat', '$Bahasa_Sehari_Hari', '$Berat_Badan', '$Tinggi_Badan', '$Golongan_Darah', '$Penyakit_Yang_Pernah_Diderita', '$Tinggal_Bersama', '$Jarak_Rumah_Ke_Sekolah', '$Alamat_Rumah', '$Status_Siswa', '$Kelas', '$Tanggal_Mendaftar', '$TA', '$No_Pendaftaran')");

        // data orang tua
        $sql1 = $koneksi->query("INSERT INTO `orang_tua_siswa`(`Nik_Siswa`, `Nik_Ayah`, `Nama_Ayah`, `Pendidikan_Tertinggi_Ayah`, `Pekerjaan_Ayah`, `Nik_ibu`, `Nama_Ibu`, `Pendidikan_Tertinggi_Ibu`, `Pekerjaan_Ibu`, `Nama_Wali_Murid`, `Pendidikan_Tertinggi_Wali_Murid`, `Hubungan_Terhadap_Anak`, `Pekerjaan_Wali_Murid`, `No_KK`, `No_Hp`) VALUES('$Nik_Siswa', '$Nik_Ayah', '$Nama_Ayah', '$Pendidikan_Tertinggi_Ayah', '$Pekerjaan_Ayah', '$Nik_ibu', '$Nama_Ibu', '$Pendidikan_Tertinggi_Ibu', '$Pekerjaan_Ibu', '$Nama_Wali_Murid', '$Pendidikan_Tertinggi_Wali_Murid', '$Hubungan_Terhadap_Anak', '$Pekerjaan_Wali_Murid', '$No_KK', '$No_Hp')");

        // data asal sekolah
        $sql2 = $koneksi->query("INSERT INTO `asal_mula_siswa`(`Nik_Siswa`, `Masuk_Ke_Sekolah_Ini_Sebagai`, `Asal_Mula_Sekolah_Anak`, `Nama_Pendidikan_Sebelumnya`, `Pindahan_Dari`, `Nisn`, `Dari_Tingkat`) values('$Nik_Siswa', '$Masuk_Ke_Sekolah_Ini_Sebagai', '$Asal_Mula_Sekolah_Anak', '$Nama_Pendidikan_Sebelumnya', '', '$Nisn', '$Dari_Tingkat')");

        // kelengkapan berkas

        $sql = $koneksi->query("INSERT INTO `kelengkapan_data`(`Nik_Siswa`, `Fhoto`) values('$Nik_Siswa', '$gambar')");
        
        // data user/ akun login
        $sql4 = $koneksi->query("INSERT INTO `user`(`UserName`, `Password`, `Level`, `Pengguna`, `akses`, `Fhoto`) values('$Nik_Siswa', '$pass', 'siswa', 'user', 'aktif', 'user.png')");

        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="login.php";

                </script>
            <?php
        
    
 }

 ?>