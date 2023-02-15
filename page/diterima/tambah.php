<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >

                <h4>Data Calon</h4>
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

                <h4>Data Orang Tua</h4>


                <div class="form-group">
                    <label> Nik_Ayah</label>
                    <input type="number" class="form-control" name="Nik_Ayah"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Nama_Ayah</label>
                    <input type="text" class="form-control" name="Nama_Ayah"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Pendidikan_Tertinggi_Ayah</label>
                    <input type="text" class="form-control" name="Pendidikan_Tertinggi_Ayah"  required autofocus />
                </div>

                <div class="form-group">
                    <label> Pekerjaan_Ayah</label>
                    <input type="text" class="form-control" name="Pekerjaan_Ayah" required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Nik_ibu</label>
                    <input type="number" class="form-control" name="Nik_ibu"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Nama_Ibu</label>
                    <input type="text" class="form-control" name="Nama_Ibu"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Pendidikan_Tertinggi_Ibu</label>
                    <input type="text" class="form-control" name="Pendidikan_Tertinggi_Ibu"  required autofocus />
                </div>
                                
                <div class="form-group">
                    <label> Pekerjaan_Ibu</label>
                    <input type="text" class="form-control" name="Pekerjaan_Ibu"  required autofocus>
                </div>
                
                <div class="form-group">
                    <label> Nama_Wali_Murid</label>
                    <input type="text" class="form-control" name="Nama_Wali_Murid" />
                </div>
                
                <div class="form-group">
                    <label> Pendidikan_Tertinggi_Wali_Murid</label>
                    <input type="text" class="form-control" name="Pendidikan_Tertinggi_Wali_Murid" />
                </div>
                <div class="form-group">
                    <label> Hubungan_Terhadap_Anak</label>
                    <input type="text" class="form-control" name="Hubungan_Terhadap_Anak" />
                </div>
                <div class="form-group">
                    <label> Pekerjaan_Wali_Murid</label>
                    <input type="text" class="form-control" name="Pekerjaan_Wali_Murid" />
                </div>
                <div class="form-group">
                    <label> No_KK</label>
                    <input type="text" class="form-control" name="No_KK"  required autofocus />
                </div>
                <div class="form-group">
                    <label> No_Hp</label>
                    <input type="number" class="form-control" name="No_Hp"  required autofocus>
                </div>

                <h4>Data Asal Sekolah</h4>

                <div class="form-group">
                    <label> Masuk_Ke_Sekolah_Ini_Sebagai</label>
                    <select class="form-control" name="Masuk_Ke_Sekolah_Ini_Sebagai"  required autofocus>
                        <option>Siswa_Baru</option>
                        <option>Pindah_Sekolah</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label> Asal_Mula_Sekolah_Anak</label>
                    <select class="form-control" name="Asal_Mula_Sekolah_Anak"  required autofocus>
                        <option>dirumah</option>
                        <option>RA/TK/Sederajat</option>
                        <option>MI/SD/Sederajat</option>
                    </select>
                </div>
                <h3>Diisi jika pendaftar telah mengikuti pendidikan sebelumnya.</h3>
                <div class="form-group">
                    <label> Nama_Pendidikan_Sebelumnya</label>
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
                    <label> Dari_Tingkat</label>
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
                
                <h4>Berkas kelengkapan (Fhoto KK/Akte lahir)</h4>

                <div class="form-group">
                    <label>File Berkas</label>
                    <input type="file" name="foto" id="foto" required autofocus />
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

// kelengkapan berkas

    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];

    $folder='gambar/kelengkapan_data/';
    $gambar=date('d_M_Y_h_i_s').'_'.$foto;
    $upload = move_uploaded_file($lokasi,$folder.$gambar);

// password
    $pass= str_replace("-", "", $Tanggal_Lahir);

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {

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
 					window.location.href="?page=diterima";

 				</script>
 			<?php
 		
 	}

 ?>
                             
                             

