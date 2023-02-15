<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from siswa where Nik_Siswa='$_GET[id]'");
    $data = $sql->fetch_assoc();
    $sql1 = $koneksi->query("select * from orang_tua_siswa where Nik_Siswa='$_GET[id]'");
    $orang_tua_siswa = $sql1->fetch_assoc();
    $sql2 = $koneksi->query("select * from asal_mula_siswa where Nik_Siswa='$_GET[id]'");
    $asal_mula_siswa = $sql2->fetch_assoc();
    //$sql3 = $koneksi->query("select * from kelengkapan_data where Nik_Siswa='$_GET[id]'");
    //$kelengkapan_data = $sql3->fetch_assoc();

?>

<div class="panel panel-default">
<div class="panel-heading">
        Perbarui Data
 </div> 
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" enctype="multipart/form-data" >
                                        <h4>Data Siswa:</h4>

                                        <div class="form-group">
                                            <label>Nik_Siswa</label>
                                            <input class="form-control" type="text" name="Nik_Siswa" value="<?php echo $data['Nik_Siswa'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input class="form-control" type="text" name="Nis" value="<?php echo $data['Nis'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nisn</label>
                                            <input class="form-control" type="text" name="Nisn" value="<?php echo $data['Nisn'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama_Lengkap</label>
                                            <input class="form-control" type="text" name="Nama_Lengkap" value="<?php echo $data['Nama_Lengkap'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama_Panggilan</label>
                                            <input class="form-control" type="text" name="Nama_Panggilan" value="<?php echo $data['Nama_Panggilan'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis_Kelamin</label>
                                            <input class="form-control" type="text" name="Jenis_Kelamin" value="<?php echo $data['Jenis_Kelamin'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat_Lahir</label>
                                            <input class="form-control" type="text" name="Tempat_Lahir" value="<?php echo $data['Tempat_Lahir'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal_Lahir</label>
                                            <input class="form-control" type="text" name="Tanggal_Lahir" value="<?php echo $data['Tanggal_Lahir'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <input class="form-control" type="text" name="Agama" value="<?php echo $data['Agama'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Kewarganegaraan</label>
                                            <input class="form-control" type="text" name="Kewarganegaraan" value="<?php echo $data['Kewarganegaraan'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Anak_Ke</label>
                                            <input class="form-control" type="text" name="Anak_Ke" value="<?php echo $data['Anak_Ke'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Banyak_Saudara_Kandung</label>
                                            <input class="form-control" type="text" name="Banyak_Saudara_Kandung" value="<?php echo $data['Banyak_Saudara_Kandung'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Banyak_Saudara_Tiri</label>
                                            <input class="form-control" type="text" name="Banyak_Saudara_Tiri" value="<?php echo $data['Banyak_Saudara_Tiri'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Banyak_Saudara_Angkat</label>
                                            <input class="form-control" type="text" name="Banyak_Saudara_Angkat" value="<?php echo $data['Banyak_Saudara_Angkat'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Bahasa_Sehari_Hari</label>
                                            <input class="form-control" type="text" name="Bahasa_Sehari_Hari" value="<?php echo $data['Bahasa_Sehari_Hari'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Berat_Badan</label>
                                            <input class="form-control" type="text" name="Berat_Badan" value="<?php echo $data['Berat_Badan'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tinggi_Badan</label>
                                            <input class="form-control" type="text" name="Tinggi_Badan" value="<?php echo $data['Tinggi_Badan'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Golongan_Darah</label>
                                            <input class="form-control" type="text" name="Golongan_Darah" value="<?php echo $data['Golongan_Darah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Penyakit_Yang_Pernah_Diderita</label>
                                            <input class="form-control" type="text" name="Penyakit_Yang_Pernah_Diderita" value="<?php echo $data['Penyakit_Yang_Pernah_Diderita'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tinggal_Bersama</label>
                                            <input class="form-control" type="text" name="Tinggal_Bersama" value="<?php echo $data['Tinggal_Bersama'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jarak_Rumah_Ke_Sekolah</label>
                                            <input class="form-control" type="text" name="Jarak_Rumah_Ke_Sekolah" value="<?php echo $data['Jarak_Rumah_Ke_Sekolah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat_Rumah</label>
                                            <input class="form-control" type="text" name="Alamat_Rumah" value="<?php echo $data['Alamat_Rumah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Status_Siswa</label>
                                            <input class="form-control" type="text" name="Status_Siswa" value="<?php echo $data['Status_Siswa'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" type="text" name="Kelas" value="<?php echo $data['Kelas'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal_Mendaftar</label>
                                            <input class="form-control" type="text" name="Tanggal_Mendaftar" value="<?php echo $data['Tanggal_Mendaftar'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>TA</label>
                                            <input class="form-control" type="text" name="TA" value="<?php echo $data['TA'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>No_Pendaftaran</label>
                                            <input class="form-control" type="text" name="No_Pendaftaran" value="<?php echo $data['No_Pendaftaran'];?>" />
                                        </div>

                                        <h4>Data Orang Tua:</h4>

                                        <div class="form-group">
                                            <label>Nik_Ayah</label>
                                            <input class="form-control" type="text" name="Nik_Ayah" value="<?php echo $orang_tua_siswa['Nik_Ayah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama_Ayah</label>
                                            <input class="form-control" type="text" name="Nama_Ayah" value="<?php echo $orang_tua_siswa['Nama_Ayah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan_Tertinggi_Ayah</label>
                                            <input class="form-control" type="text" name="Pendidikan_Tertinggi_Ayah" value="<?php echo $orang_tua_siswa['Pendidikan_Tertinggi_Ayah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan_Ayah</label>
                                            <input class="form-control" type="text" name="Pekerjaan_Ayah" value="<?php echo $orang_tua_siswa['Pekerjaan_Ayah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nik_ibu</label>
                                            <input class="form-control" type="text" name="Nik_ibu" value="<?php echo $orang_tua_siswa['Nik_ibu'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama_Ibu</label>
                                            <input class="form-control" type="text" name="Nama_Ibu" value="<?php echo $orang_tua_siswa['Nama_Ibu'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan_Tertinggi_Ibu</label>
                                            <input class="form-control" type="text" name="Pendidikan_Tertinggi_Ibu" value="<?php echo $orang_tua_siswa['Pendidikan_Tertinggi_Ibu'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan_Ibu</label>
                                            <input class="form-control" type="text" name="Pekerjaan_Ibu" value="<?php echo $orang_tua_siswa['Pekerjaan_Ibu'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama_Wali_Murid</label>
                                            <input class="form-control" type="text" name="Nama_Wali_Murid" value="<?php echo $orang_tua_siswa['Nama_Wali_Murid'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan_Tertinggi_Wali_Murid</label>
                                            <input class="form-control" type="text" name="Pendidikan_Tertinggi_Wali_Murid" value="<?php echo $orang_tua_siswa['Pendidikan_Tertinggi_Wali_Murid'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Hubungan_Terhadap_Anak</label>
                                            <input class="form-control" type="text" name="Hubungan_Terhadap_Anak" value="<?php echo $orang_tua_siswa['Hubungan_Terhadap_Anak'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan_Wali_Murid</label>
                                            <input class="form-control" type="text" name="Pekerjaan_Wali_Murid" value="<?php echo $orang_tua_siswa['Pekerjaan_Wali_Murid'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>No_KK</label>
                                            <input class="form-control" type="text" name="No_KK" value="<?php echo $orang_tua_siswa['No_KK'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>No_Hp</label>
                                            <input class="form-control" type="text" name="No_Hp" value="<?php echo $orang_tua_siswa['No_Hp'];?>" />
                                        </div>


                                        <h4>Data Asal Sekolah :</h4>

                                        <div class="form-group">
                                            <label>Masuk_Ke_Sekolah_Ini_Sebagai</label>
                                            <input class="form-control" type="text" name="Masuk_Ke_Sekolah_Ini_Sebagai" value="<?php echo $asal_mula_siswa['Masuk_Ke_Sekolah_Ini_Sebagai'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Asal_Mula_Sekolah_Anak</label>
                                            <input class="form-control" type="text" name="Asal_Mula_Sekolah_Anak" value="<?php echo $asal_mula_siswa['Asal_Mula_Sekolah_Anak'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama_Pendidikan_Sebelumnya</label>
                                            <input class="form-control" type="text" name="Nama_Pendidikan_Sebelumnya" value="<?php echo $asal_mula_siswa['Nama_Pendidikan_Sebelumnya'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pindahan_Dari</label>
                                            <input class="form-control" type="text" name="Pindahan_Dari" value="<?php echo $asal_mula_siswa['Pindahan_Dari'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nisn</label>
                                            <input class="form-control" type="text" name="Nisn" value="<?php echo $asal_mula_siswa['Nisn'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Dari_Tingkat</label>
                                            <input class="form-control" type="text" name="Dari_Tingkat" value="<?php echo $asal_mula_siswa['Dari_Tingkat'];?>" />
                                        </div>

                                        <h4>Akun User:</h4>

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" value="<?php echo $akun['UserName'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="pass" type="text" id="pass" value="<?php echo $akun['Password'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Level</label>
                                            <input class="form-control" name="level"  id="pass" value="<?php echo $akun['Level'];?>" readonly/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Akses</label>
                                            <input class="form-control" name="akses"  id="pass" value="<?php echo $akun['akses'];?>" readonly/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Foto</label>
                                            <label><img src='gambar/user/<?php echo $akun['Fhoto'];?>' width="100" height="75"></label>
                                            
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>
                                 </div>

                                 </form>
                              </div>
 </div>  
 </div>  
 </div>


 <?php

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



    $simpan = $_POST ['simpan'];

    if ($simpan) {
//Teleph`Nik_Siswa`, `Nis`, `Nisn`, `Nama_Lengkap`, `Nama_Panggilan`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Agama`, `Kewarganegaraan`, `Anak_Ke`, `one`

//data siswa
        $sql1 = $koneksi->query("update  siswa set `Nik_Siswa`='$Nik_Siswa', `Nis`='$Nis', `Nisn`='$Nisn', `Nama_Lengkap`='$Nama_Lengkap', `Nama_Panggilan`='$Nama_Panggilan', `Jenis_Kelamin`='$Jenis_Kelamin', `Tempat_Lahir`='$Tempat_Lahir', `Tanggal_Lahir`='$Tanggal_Lahir', `Agama`='$Agama', `Kewarganegaraan`='$Kewarganegaraan', `Anak_Ke`='$Anak_Ke', `Banyak_Saudara_Kandung`='$Banyak_Saudara_Kandung', `Banyak_Saudara_Tiri`='$Banyak_Saudara_Tiri', `Bahasa_Sehari_Hari`='$Bahasa_Sehari_Hari', `Banyak_Saudara_Angkat`='$Banyak_Saudara_Angkat', `Berat_Badan`='$Berat_Badan', `Tinggi_Badan`='$Tinggi_Badan', `Golongan_Darah`='$Golongan_Darah', `Penyakit_Yang_Pernah_Diderita`='$Penyakit_Yang_Pernah_Diderita', `Tinggal_Bersama`='$Tinggal_Bersama', `Jarak_Rumah_Ke_Sekolah`='$Jarak_Rumah_Ke_Sekolah', `Alamat_Rumah`='$Alamat_Rumah', `Status_Siswa`='$Status_Siswa', `Kelas`='$Kelas', `Tanggal_Mendaftar`='$Tanggal_Mendaftar', `TA`='$TA', `No_Pendaftaran`='$No_Pendaftaran' where Nik_Siswa='$id'");

// data orang tua
        $sql2 = $koneksi->query("update  orang_tua_siswa set `Nik_Siswa`='$Nik_Siswa', `Nik_Ayah`='$Nik_Ayah', `Nama_Ayah`='$Nama_Ayah', `Pendidikan_Tertinggi_Ayah`='$Pendidikan_Tertinggi_Ayah', `Pekerjaan_Ayah`='$Pekerjaan_Ayah', `Nik_ibu`='$Nik_ibu', `Nama_Ibu`='$Nama_Ibu', `Pendidikan_Tertinggi_Ibu`='$Pendidikan_Tertinggi_Ibu', `Pekerjaan_Ibu`='$Pekerjaan_Ibu', `Nama_Wali_Murid`='$Nama_Wali_Murid', `Pendidikan_Tertinggi_Wali_Murid`='$Pendidikan_Tertinggi_Wali_Murid', `Hubungan_Terhadap_Anak`='$Hubungan_Terhadap_Anak', `Pekerjaan_Wali_Murid`='$Pekerjaan_Wali_Murid', `No_Hp`='$No_Hp' where Nik_Siswa='$id'");

// data asal sekolah
        $sql3 = $koneksi->query("update  asal_mula_siswa set `Nik_Siswa`='$Nik_Siswa', `Masuk_Ke_Sekolah_Ini_Sebagai`='$Masuk_Ke_Sekolah_Ini_Sebagai', `Asal_Mula_Sekolah_Anak`='$Asal_Mula_Sekolah_Anak', `Nama_Pendidikan_Sebelumnya`='$Nama_Pendidikan_Sebelumnya', `Pindahan_Dari`='$Pindahan_Dari', `Nisn`='$Nisn', `Dari_Tingkat`='$Dari_Tingkat' where Nik_Siswa='$id'");
        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=pindah";

                </script>
            <?php
        
    }

 ?>
                             
                             

