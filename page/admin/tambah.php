<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label>Nik Pengajar</label>
                    <select class="form-control" name="Nik_Pengajar" id="Nik_Pengajar" required autofocus >
                        <option value="">--Pilih--</option>
                        <?php
                        $kunci=$data['Nik_Pengajar'];
                            $sql1 = $koneksi->query("select * from pengajar ");

                            while ($data1= $sql1->fetch_assoc()) 
                                {  ?>
                                    <option value="<?php echo  $data1['Nik_Pengajar'];?>"><?php echo  $data1['Nik_Pengajar'];?>,<?php echo  $data1['Nama_Pengajar'];?></option>
                        <?php } ?>
                        
                    </select>
                </div>

                <div class="form-group">
                    <label> Tanggal ditetapkan</label>
                    <input type="date" class="form-control" name="Tanggal_ditetapkan"  required autofocus />
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

 	$Nik_Pengajar = $_POST ['Nik_Pengajar'];
    $Tanggal_ditetapkan = $_POST ['Tanggal_ditetapkan'];
    
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		$sql = $koneksi->query("INSERT INTO `admin`(`Nik_Pengajar`, `Tanggal_ditetapkan`) values('$Nik_Pengajar', '$Tanggal_ditetapkan')");

 		
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=admin";

 				</script>
 			<?php
 		
 	}

 ?>
                             
                             

