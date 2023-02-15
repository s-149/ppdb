<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from asal_mula_siswa where Nik_Siswa='$_GET[id]'");
    $data = $sql->fetch_assoc();

?>

<div class="panel panel-default">
<div class="panel-heading">
		Perbarui Data
 </div> 
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" enctype="multipart/form-data" >

                                        <div class="form-group">
                                            <label>Nik_Siswa</label>
                                            <input class="form-control" type="text" name="Nik_Siswa" value="<?php echo $data['Nik_Siswa'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Masuk_Ke_Sekolah_Ini_Sebagai</label>
                                            <input class="form-control" type="text" name="Masuk_Ke_Sekolah_Ini_Sebagai" value="<?php echo $data['Masuk_Ke_Sekolah_Ini_Sebagai'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Asal_Mula_Sekolah_Anak</label>
                                            <input class="form-control" type="text" name="Asal_Mula_Sekolah_Anak" value="<?php echo $data['Asal_Mula_Sekolah_Anak'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama_Pendidikan_Sebelumnya</label>
                                            <input class="form-control" type="text" name="Nama_Pendidikan_Sebelumnya" value="<?php echo $data['Nama_Pendidikan_Sebelumnya'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pindahan_Dari</label>
                                            <input class="form-control" type="text" name="Pindahan_Dari" value="<?php echo $data['Pindahan_Dari'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nisn</label>
                                            <input class="form-control" type="text" name="Nisn" value="<?php echo $data['Nisn'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Dari_Tingkat</label>
                                            <input class="form-control" type="text" name="Dari_Tingkat" value="<?php echo $data['Dari_Tingkat'];?>" />
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
    $Pindahan_Dari = $_POST ['Pindahan_Dari'];
    $Nisn = $_POST ['Nisn'];
    $Dari_Tingkat = $_POST ['Dari_Tingkat'];
       
    $simpan = $_POST ['simpan'];

 	if ($simpan) {
        $sql = $koneksi->query("update  asal_mula_siswa set `Nik_Siswa`='$Nik_Siswa', `Masuk_Ke_Sekolah_Ini_Sebagai`='$Masuk_Ke_Sekolah_Ini_Sebagai', `Asal_Mula_Sekolah_Anak`='$Asal_Mula_Sekolah_Anak', `Nama_Pendidikan_Sebelumnya`='$Nama_Pendidikan_Sebelumnya', `Pindahan_Dari`='$Pindahan_Dari', `Nisn`='$Nisn', `Dari_Tingkat`='$Dari_Tingkat' where Nik_Siswa='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=asal_mula_siswa";

                </script>
            <?php
        
    }

 ?>
                             
                             

