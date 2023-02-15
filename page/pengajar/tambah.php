<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label> Nik_Pengajar</label>
                    <input type="number" class="form-control" name="Nik_Pengajar"  required autofocus />
                </div>     

                <div class="form-group">
                    <label> Nip</label>
                    <input type="number" class="form-control" name="Nip"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Nama_Pengajar</label>
                    <input type="text" class="form-control" name="Nama_Pengajar"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> JK</label>
                    <select type="text" class="form-control" name="JK"  required autofocus>
                        <option>L</option>
                        <option>P</option>
                    </select>
                </div>

                <div class="form-group">
                    <label> Tempat_Lahir</label>
                    <input type="text" class="form-control" name="Tempat_Lahir" required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Tanggal_Lahir</label>
                    <input type="date" class="form-control" name="Tanggal_Lahir"  required autofocus>
                </div>
                
                <div class="form-group">
                    <label> Alamat</label>
                    <textarea type="text" class="form-control" name="Alamat"  required autofocus></textarea>
                </div>
                
                <div class="form-group">
                    <label> No_Hp</label>
                    <input type="number" class="form-control" name="No_Hp"  required autofocus />
                </div>
                

                <!--div class="form-group">
                    <label> Status</label>
                    <input type="text" class="form-control" name="Status"  required autofocus />
                </div-->
                
                <div class="form-group">
                    <label> Fungsi</label>
                    <select class="form-control" name="Fungsi"  required autofocus>
                        <option>pengajar</option>
                        <option>staff</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label> Jabatan</label>
                    <input class="form-control" name="Jabatan"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> TA</label>
                    <input type="text" class="form-control" name="TA" value="<?php echo date('Y'); ?>"  required autofocus readonly />
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
    $Nip = $_POST ['Nip'];
    $Nama_Pengajar = $_POST ['Nama_Pengajar'];
    $JK = $_POST ['JK'];
    $Tempat_Lahir = $_POST ['Tempat_Lahir'];
    $Tanggal_Lahir = $_POST ['Tanggal_Lahir'];
    $Alamat = $_POST ['Alamat'];
    $No_Hp = $_POST ['No_Hp'];
    //$Status = $_POST ['Status'];
    $Fungsi = $_POST ['Fungsi'];
    $Jabatan = $_POST ['Jabatan'];
    $TA = $_POST ['TA'];
    
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		$sql = $koneksi->query("INSERT INTO `pengajar`(`Nik_Pengajar`, `Nip`, `Nama_Pengajar`, `JK`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `No_Hp`, `Status`, `Fungsi`, `Jabatan`, `TA`) values('$Nik_Pengajar', '$Nip', '$Nama_Pengajar', '$JK', '$Tempat_Lahir', '$Tanggal_Lahir', '$Alamat', '$No_Hp', 'aktif', '$Fungsi', '$Jabatan', '$TA')");

 		
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=pengajar";

 				</script>
 			<?php
 		
 	}

 ?>
                             
                             

