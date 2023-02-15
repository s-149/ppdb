<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >
               
                <div class="form-group">
                    <label> NSS</label>
                    <input type="number" class="form-control" name="NSS"  required autofocus />
                </div>     

                <div class="form-group">
                    <label> Tahun Berdiri</label>
                    <input type="number" class="form-control" name="Tahun_Berdiri"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Pendiri</label>
                    <input type="text" class="form-control" name="Pendiri"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Nama Sekolah</label>
                    <input type="text" class="form-control" name="NamaSekolah"  required autofocus />
                </div>

                <!--div class="form-group">
                    <label> Tingkat Sekolah</label>
                    <input type="text" class="form-control" name="JenjangSekolah" value="Dasar"  required autofocus readonly />
                </div>
                
                <div class="form-group">
                    <label> Status Sekolah</label>
                    <select class="form-control" name="StatusSekolah"  required autofocus>
                        <option value="negeri">negeri</option>
                        <option value="swasta">swasta</option>
                    </select>
                </div-->
                
                <div class="form-group">
                    <label> Status Akreditasi</label>
                    <input type="text" class="form-control" name="Terakreditasi"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Visi</label>
                    <input type="text" class="form-control" name="Visi"  required autofocus />
                </div>
                

                <div class="form-group">
                    <label> Misi</label>
                    <input type="text" class="form-control" name="Misi"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Biografi Sekolah</label>
                    <textarea class="form-control" name="Biografi"  required autofocus></textarea>
                </div>
                
                <div class="form-group">
                    <label> Alamat</label>
                    <textarea class="form-control" name="Alamat"  required autofocus></textarea>
                </div>
                
                <div class="form-group">
                    <label> Telephone</label>
                    <input type="number" class="form-control" name="Telephone"  required autofocus />
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
//

    $NSS = $_POST ['NSS'];
    $Tahun_Berdiri = $_POST ['Tahun_Berdiri'];
    $Pendiri = $_POST ['Pendiri'];
    $NamaSekolah = $_POST ['NamaSekolah'];
 //   $JenjangSekolah = $_POST ['JenjangSekolah'];
    //$StatusSekolah = $_POST ['StatusSekolah'];
    $Terakreditasi = $_POST ['Terakreditasi'];
    $Visi = $_POST ['Visi'];
    $Misi = $_POST ['Misi'];
    $Biografi = $_POST ['Biografi'];
    $Alamat = $_POST ['Alamat'];
    $Telephone = $_POST ['Telephone'];
    
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		$sql = $koneksi->query("INSERT INTO `sekolah`(`NSS`, `Tahun_Berdiri`, `Pendiri`, `NamaSekolah`, `JenjangSekolah`, `StatusSekolah`, `Terakreditasi`, `Visi`, `Misi`, `Biografi`, `Alamat`, `Telephone`) values('$NSS', '$Tahun_Berdiri', '$Pendiri', '$NamaSekolah', 'Dasar', 'Swasta', '$Terakreditasi', '$Visi', '$Misi', '$Biografi', '$Alamat', '$Telephone')");

 		
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=sekolah";

 				</script>
 			<?php
 		
 	}

 ?>
                             
                             

