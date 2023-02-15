<?php
    
    $id=$_GET['id'];

?>
<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label>Nik_Siswa</label>
                    <input class="form-control" name="Nik_Siswa" id="Nik_Siswa" value="<?php echo $id ?>" required autofocus readonly/>
                </div>
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

 	$Nik_Siswa = $_POST ['Nik_Siswa'];
    
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];

    $folder='gambar/kelengkapan_data/';
    $gambar=date('d_M_Y_h_i_s').'_'.$foto;
    $upload = move_uploaded_file($lokasi,$folder.$gambar);
                  

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
        if ($upload) {
           
 		$sql = $koneksi->query("INSERT INTO `kelengkapan_data`(`Nik_Siswa`, `Fhoto`) values('$Nik_Siswa', '$gambar')");

 		
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=kelas6";

 				</script>
 			<?php
 		}
 	}

 ?>
                             
                             

