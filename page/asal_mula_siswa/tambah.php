<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label> Nik_Siswa</label>
                    <input type="number" class="form-control" name="Nik_Siswa"  required autofocus />
                </div>     

                <div class="form-group">
                    <label> Masuk_Ke_Sekolah_Ini_Sebagai</label>
                    <select class="form-control" name="Masuk_Ke_Sekolah_Ini_Sebagai"  required autofocus>
                        <option>Siswa Baru</option>
                        <option>Pindah Sekolah</option>
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

    $Nik_Siswa = $_POST ['Nik_Siswa'];
    $Masuk_Ke_Sekolah_Ini_Sebagai = $_POST ['Masuk_Ke_Sekolah_Ini_Sebagai'];
    $Asal_Mula_Sekolah_Anak = $_POST ['Asal_Mula_Sekolah_Anak'];
    $Nama_Pendidikan_Sebelumnya = $_POST ['Nama_Pendidikan_Sebelumnya'];
    $Nisn = $_POST ['Nisn'];
    $Dari_Tingkat = $_POST ['Dari_Tingkat'];
    
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		$sql = $koneksi->query("INSERT INTO `asal_mula_siswa`(`Nik_Siswa`, `Masuk_Ke_Sekolah_Ini_Sebagai`, `Asal_Mula_Sekolah_Anak`, `Nama_Pendidikan_Sebelumnya`, `Pindahan_Dari`, `Nisn`, `Dari_Tingkat`) values('$Nik_Siswa', '$Masuk_Ke_Sekolah_Ini_Sebagai', '$Asal_Mula_Sekolah_Anak', '$Nama_Pendidikan_Sebelumnya', '', '$Nisn', '$Dari_Tingkat')");

 		
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=asal_mula_siswa";

 				</script>
 			<?php
 		
 	}

 ?>
                             
                             

