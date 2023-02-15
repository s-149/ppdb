<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from admin where Nik_Pengajar='$_GET[id]'");
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
                                            <label>Nik Pengajar</label>
                                            <input class="form-control" type="text" name="Nik_Pengajar" value="<?php echo $data['Nik_Pengajar'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal_ditetapkan</label>
                                            <input class="form-control" name="Tanggal_ditetapkan"  id="pass" value="<?php echo $data['Tanggal_ditetapkan'];?>" readonly/>
                                            
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

        $sql = $koneksi->query("update  admin set Nik_Pengajar='$Nik_Pengajar', Tanggal_ditetapkan='$Tanggal_ditetapkan' where Nik_Pengajar='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=admin";

                </script>
            <?php
        
    }

 ?>
                             
                             

