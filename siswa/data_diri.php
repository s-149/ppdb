
    <section class="learning_part" id="daftar">
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
                    <div class="course bg-white h-100 align-self-stretch">
                        <figure class="m-0">
                            <div class="card">
                                <div class="card">
                                    <?php
    
    $id=$user;
    $sql = $koneksi->query("select * from siswa where Nik_Siswa='$user'");
    $data = $sql->fetch_assoc();
    $sql1 = $koneksi->query("select * from orang_tua_siswa where Nik_Siswa='$user'");
    $orang_tua_siswa = $sql1->fetch_assoc();
    $sql2 = $koneksi->query("select * from asal_mula_siswa where Nik_Siswa='$user'");
    $asal_mula_siswa = $sql2->fetch_assoc();
    //$sql3 = $koneksi->query("select * from kelengkapan_data where Nik_Siswa='$_GET[id]'");
    //$kelengkapan_data = $sql3->fetch_assoc();
    $sql4 = $koneksi->query("select * from user where UserName='$user'");
    $akun = $sql4->fetch_assoc();

?>

<div class="panel panel-default">
<div class="panel-heading">
        Formulir PPDB
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
                <div class="table-responsive">
                    <table class="table">
                        <!-- data siswa -->
                        <tr>
                            <td colspan="3"><h4>Data Siswa:</h4></td>
                        </tr>
                        <tr>
                            <td>Nik Siswa</td>
                            <td>:</td>
                            <td><?php echo $data['Nik_Siswa'];?></td>
                        </tr>
                        <tr>
                            <td>Nis</td>
                            <td>:</td>
                            <td><?php echo $data['Nis'];?></td>
                        </tr>
                        <tr>
                            <td>Nisn</td>
                            <td>:</td>
                            <td><?php echo $data['Nisn'];?></td>
                        </tr>
                        <tr>
                            <td>Nama_Lengkap</td>
                            <td>:</td>
                            <td><?php echo $data['Nama_Lengkap'];?></td>
                        </tr>
                        <tr>
                            <td>Nama_Panggilan</td>
                            <td>:</td>
                            <td><?php echo $data['Nama_Panggilan'];?></td>
                        </tr>
                        <tr>
                            <td>Jenis_Kelamin</td>
                            <td>:</td>
                            <td><?php echo $data['Jenis_Kelamin'];?></td>
                        </tr>
                        <tr>
                            <td>Tempat_Lahir</td>
                            <td>:</td>
                            <td><?php echo $data['Tempat_Lahir'];?></td>
                        </tr>
                        <tr>
                            <td>Tanggal_Lahir</td>
                            <td>:</td>
                            <td><?php echo $data['Tanggal_Lahir'];?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?php echo $data['Agama'];?></td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>:</td>
                            <td><?php echo $data['Kewarganegaraan'];?></td>
                        </tr>
                        <tr>
                            <td>Anak_Ke</td>
                            <td>:</td>
                            <td><?php echo $data['Anak_Ke'];?></td>
                        </tr>
                        <tr>
                            <td>Banyak_Saudara_Kandung</td>
                            <td>:</td>
                            <td><?php echo $data['Banyak_Saudara_Kandung'];?></td>
                        </tr>
                        <tr>
                            <td>Banyak_Saudara_Tiri</td>
                            <td>:</td>
                            <td><?php echo $data['Banyak_Saudara_Tiri'];?></td>
                        </tr>
                        <tr>
                            <td>Banyak_Saudara_Angkat</td>
                            <td>:</td>
                            <td><?php echo $data['Banyak_Saudara_Angkat'];?></td>
                        </tr>
                        <tr>
                            <td>Bahasa_Sehari_Hari</td>
                            <td>:</td>
                            <td><?php echo $data['Bahasa_Sehari_Hari'];?></td>
                        </tr>
                        <tr>
                            <td>Berat_Badan</td>
                            <td>:</td>
                            <td><?php echo $data['Berat_Badan'];?></td>
                        </tr>
                        <tr>
                            <td>Tinggi_Badan</td>
                            <td>:</td>
                            <td><?php echo $data['Tinggi_Badan'];?></td>
                        </tr>
                        <tr>
                            <td>Golongan_Darah</td>
                            <td>:</td>
                            <td><?php echo $data['Golongan_Darah'];?></td>
                        </tr>
                        <tr>
                            <td>Penyakit_Yang_Pernah_Diderita</td>
                            <td>:</td>
                            <td><?php echo $data['Penyakit_Yang_Pernah_Diderita'];?></td>
                        </tr>
                        <tr>
                            <td>Tinggal_Bersama</td>
                            <td>:</td>
                            <td><?php echo $data['Tinggal_Bersama'];?></td>
                        </tr>
                        <tr>
                            <td>Jarak_Rumah_Ke_Sekolah</td>
                            <td>:</td>
                            <td><?php echo $data['Jarak_Rumah_Ke_Sekolah'];?></td>
                        </tr>
                        <tr>
                            <td>Alamat_Rumah</td>
                            <td>:</td>
                            <td><?php echo $data['Alamat_Rumah'];?></td>
                        </tr>
                        <tr>
                            <td>Status_Siswa</td>
                            <td>:</td>
                            <td><?php echo $data['Status_Siswa'];?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td><?php echo $data['Kelas'];?></td>
                        </tr>
                        <tr>
                            <td>Tanggal_Mendaftar</td>
                            <td>:</td>
                            <td><?php echo $data['Tanggal_Mendaftar'];?></td>
                        </tr>
                        <tr>
                            <td>TA</td>
                            <td>:</td>
                            <td><?php echo $data['TA'];?></td>
                        </tr>

                        <!-- data orang tua -->

                        <tr>
                            <td colspan="3"><h4>Data Orang Tua:</h4></td>
                        </tr>

                        <tr>
                            <td>Nik_Ayah</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['Nik_Ayah'];?></td>
                        </tr>
                        <tr>
                            <td>Nama_Ayah</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['Nama_Ayah'];?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan_Tertinggi_Ayah</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['Pendidikan_Tertinggi_Ayah'];?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan_Ayah</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['Pekerjaan_Ayah'];?></td>
                        </tr>
                        <tr>
                            <td>Nik_ibu</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['Nik_ibu'];?></td>
                        </tr>
                        <tr>
                            <td>Nama_Ibu</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['Nama_Ibu'];?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan_Tertinggi_Ibu</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['Pendidikan_Tertinggi_Ibu'];?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan_Ibu</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['Pekerjaan_Ibu'];?></td>
                        </tr>
                        <tr>
                            <td>Nama_Wali_Murid</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['Nama_Wali_Murid'];?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan_Tertinggi_Wali_Murid</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['Pendidikan_Tertinggi_Wali_Murid'];?></td>
                        </tr>
                        <tr>
                            <td>Hubungan_Terhadap_Anak</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['Hubungan_Terhadap_Anak'];?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan_Wali_Murid</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['Pekerjaan_Wali_Murid'];?></td>
                        </tr>
                        <tr>
                            <td>No_KK</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['No_KK'];?></td>
                        </tr>
                        <tr>
                            <td>No_Hp</td>
                            <td>:</td>
                            <td><?php echo $orang_tua_siswa['No_Hp'];?></td>
                        </tr>

                        <!-- data Data Asal Sekolah  -->
                        
                        <tr>
                            <td colspan="3"><h4>Data Asal Sekolah :</h4></td>
                        </tr>

                        <tr>
                            <td>Masuk_Ke_Sekolah_Ini_Sebagai</td>
                            <td>:</td>
                            <td><?php echo $asal_mula_siswa['Masuk_Ke_Sekolah_Ini_Sebagai'];?></td>
                        </tr>
                        <tr>
                            <td>Asal_Mula_Sekolah_Anak</td>
                            <td>:</td>
                            <td><?php echo $asal_mula_siswa['Asal_Mula_Sekolah_Anak'];?></td>
                        </tr>
                        <tr>
                            <td>Nama_Pendidikan_Sebelumnya</td>
                            <td>:</td>
                            <td><?php echo $asal_mula_siswa['Nama_Pendidikan_Sebelumnya'];?></td>
                        </tr>
                        <tr>
                            <td>Pindahan_Dari</td>
                            <td>:</td>
                            <td><?php echo $asal_mula_siswa['Pindahan_Dari'];?></td>
                        </tr>
                        <tr>
                            <td>Nisn</td>
                            <td>:</td>
                            <td><?php echo $asal_mula_siswa['Nisn'];?></td>
                        </tr>
                        <tr>
                            <td>Dari_Tingkat</td>
                            <td>:</td>
                            <td><?php echo $asal_mula_siswa['Dari_Tingkat'];?></td>
                        </tr>
                    </table>
                </div>

            <h4>Kelengkapan Berkas:</h4>
                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $no = 1;

                        $sql3 = $koneksi->query("select * from kelengkapan_data where Nik_Siswa='$user'");

                        while ($kelengkapan_data= $sql3->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><a href="gambar/kelengkapan_data/<?php echo  $kelengkapan_data['Fhoto'];?>"> <img src="gambar/kelengkapan_data/<?php echo  $kelengkapan_data['Fhoto'];?>" width="75" height="50"></a> </td>
                    </tr>


                    <?php  } ?>
                </tbody>

                </table>
              </div>
          </div>
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