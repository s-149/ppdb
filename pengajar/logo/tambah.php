<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >

                <div class="form-group">
                    <label>Gambar:</label>
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

 	$foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];

    $folder='gambar/logo/';
    $gambar=date('d_M_Y_h_i_s').'_'.$foto;
    $upload = move_uploaded_file($lokasi,$folder.$gambar);
                  

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
        if ($upload) {
           
 		$sql = $koneksi->query("INSERT INTO `logo`(`Fhoto`) values('$gambar')");

 		
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=logo";

 				</script>
 			<?php
 		}
 	}

 ?>
                             
                             

