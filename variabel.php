<?php
    
    //********************************************************************//
    // pemanggilan database
    //********************************************************************//

    $sekolah=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM `sekolah` "));
    $logo=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM `logo` ORDER BY `logo`.`id` DESC "));
    $baner=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM `baner` ORDER BY `baner`.`id` DESC "));

    //********************************************************************//

	
	// metta
    $description="Sistem Informasi Penerimaan Peserta Didik Baru Mis Kompa";
	$author="MR S-149 dan Team Peneliti Nusaputra Sukabumi (Sabar[17185097], Ana Khusnul Khotimah[], Monika Gultom[]";
	$keyword="mi , MI , mis , MIS , kompa , Kompa , KOMPA , mi kompa , Mi Kompa , MI KOMPA , MIS Kompa , MIS KOMPA , lia waslia , LIA WASLIA ";

	// title
	$title='Sistem PPDB '.$sekolah['NamaSekolah'];

	// icon
    $icon="gambar/logo/".$logo['Fhoto'];

    // nama institusi/lembaga
    $institusi=$sekolah['NamaSekolah'];

    // Tahun berdiri institusi/lembaga
    $Tahun_berdiri_institusi=$sekolah['Tahun_Berdiri'];

    $Tahun_Angkatan=date('Y');

    //********************************************************************//
    //variabel navbar
    //********************************************************************//
    // admin
    $navbar=array('dashboard','user','admin','sekolah','kepala sekolah','logo','baner','galeri','pengajar','siswa','orang tua siswa','asal mula siswa','kelengkapan data');
    //$icon=array('fas fa-bar-home','fas fa-bar-calendar-alt','');
    // admin1
    $navbar1=array('dashboard','admin','sekolah','kepala sekolah','logo','baner','galeri','pengajar','siswa','orang tua siswa','asal mula siswa','kelengkapan data');
    //$icon=array('fas fa-bar-home','fas fa-bar-calendar-alt','');
    // pengajar
    $navbar2=array('dashboard','pengajar','siswa','baner','galeri');
    //$icon=array('fas fa-bar-home','fas fa-bar-calendar-alt','');
    // user
    $navbar3=array('dashboard');
    //$icon=array('fas fa-bar-home','fas fa-bar-calendar-alt','');

    // menghitung jumlah navbar

    $nav=count($navbar);
    $nav1=count($navbar1);
    $nav2=count($navbar2);
    $nav3=count($navbar3);

    //********************************************************************//
    // pemanggilan database
    //********************************************************************//

    //********************************************************************//
    // rangka
    
    /*

    $login="select * from `user` ";
    $query=mysqli_query($koneksi,$login);
    $login_user=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $login_user++;
            }
    */

    //********************************************************************//


    //********************************************************************//
    // user 

    // jumlah user

    $login="select * from `user` ";
    $query=mysqli_query($koneksi,$login);
    $jml_user=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $jml_user++;
            }

    //********************************************************************//

    

    //********************************************************************//
    // siswa 

    // siswa baru

    $baru="select * from `siswa`  WHERE `Status_Siswa` = 'baru'";
    $query=mysqli_query($koneksi,$baru);
    $siswa_baru=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_baru++;
            }

    // siswa diterima

    $diterima="select * from `siswa`  WHERE `Status_Siswa` = 'diterima'";
    $query=mysqli_query($koneksi,$diterima);
    $siswa_diterima=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_diterima++;
            }

    // siswa ditolak

    $ditolak="select * from `siswa`  WHERE `Status_Siswa` = 'ditolak'";
    $query=mysqli_query($koneksi,$ditolak);
    $siswa_ditolak=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_ditolak++;
            }

    // siswa kelas1

    $kelas1="select * from `siswa`  WHERE `Kelas` = 'kelas1' and `Status_Siswa` = 'aktif'";
    $query=mysqli_query($koneksi,$kelas1);
    $siswa_kelas1=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_kelas1++;
            }

    // siswa kelas2

    $kelas2="select * from `siswa`  WHERE `Kelas` = 'kelas2' and `Status_Siswa` = 'aktif'";
    $query=mysqli_query($koneksi,$kelas2);
    $siswa_kelas2=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_kelas2++;
            }

    // siswa kelas3

    $kelas3="select * from `siswa`  WHERE `Kelas` = 'kelas3' and `Status_Siswa` = 'aktif'";
    $query=mysqli_query($koneksi,$kelas3);
    $siswa_kelas3=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_kelas3++;
            }

    // siswa kelas4

    $kelas4="select * from `siswa`  WHERE `Kelas` = 'kelas4' and `Status_Siswa` = 'aktif'";
    $query=mysqli_query($koneksi,$kelas4);
    $siswa_kelas4=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_kelas4++;
            }

    // siswa kelas5

    $kelas5="select * from `siswa`  WHERE `Kelas` = 'kelas5' and `Status_Siswa` = 'aktif'";
    $query=mysqli_query($koneksi,$kelas5);
    $siswa_kelas5=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_kelas5++;
            }

    // siswa kelas6

    $kelas6="select * from `siswa`  WHERE `Kelas` = 'kelas6' and `Status_Siswa` = 'aktif'";
    $query=mysqli_query($koneksi,$kelas6);
    $siswa_kelas6=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_kelas6++;
            }

    // siswa lulus

    $lulus="select * from `siswa`  WHERE `Status_Siswa` = 'lulus'";
    $query=mysqli_query($koneksi,$lulus);
    $siswa_lulus=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_lulus++;
            }

    // siswa aktif

    $aktif="select * from `siswa`  WHERE `Status_Siswa` = 'aktif'";
    $query=mysqli_query($koneksi,$aktif);
    $siswa_aktif=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_aktif++;
            }

    // siswa pindah

    $pindah="select * from `siswa`  WHERE `Status_Siswa` = 'pindah'";
    $query=mysqli_query($koneksi,$pindah);
    $siswa_pindah=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_pindah++;
            }

    // siswa dikeluarkan

    $dikeluarkan="select * from `siswa`  WHERE `Status_Siswa` = 'dikeluarkan'";
    $query=mysqli_query($koneksi,$dikeluarkan);
    $siswa_dikeluarkan=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_dikeluarkan++;
            }

    // siswa lulus

    $lulus="select * from `siswa`  WHERE `Status_Siswa` = 'lulus'";
    $query=mysqli_query($koneksi,$lulus);
    $siswa_lulus=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_lulus++;
            }

    // siswa berhenti

    $berhenti="select * from `siswa`  WHERE `Status_Siswa` = 'berhenti'";
    $query=mysqli_query($koneksi,$berhenti);
    $siswa_berhenti=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $siswa_berhenti++;
            }

    // jumlah siswa

    $jml_siswa="select * from `siswa` ";
    $query=mysqli_query($koneksi,$jml_siswa);
    $jml_siswa=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $jml_siswa++;
            }


    // kelas yang memiliki siswa terbanyak saat ini

    $siswa_terbanyak=max($siswa_kelas1,$siswa_kelas2,$siswa_kelas3,$siswa_kelas4,$siswa_kelas5,$siswa_kelas6);

    //********************************************************************//


    //********************************************************************//
    // pengajar 

    // jumlah pengajar

    $pengajar="select * from `pengajar` where `Fungsi`='pengajar' ";
    $query=mysqli_query($koneksi,$pengajar);
    $jml_pengajar=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $jml_pengajar++;
            }

    //********************************************************************//


    //********************************************************************//
    // membuat token 
    $_t=date('d_M_Y_h_i_s');
    $_token= sha1($_t);

    //********************************************************************//


    

 

?> 