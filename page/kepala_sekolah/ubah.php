<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from kepala_sekolah where Nik_Pengajar='$_GET[id]'");
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
                                            <label>Periode</label>
                                            <input class="form-control" name="Periode" type="text" id="pass" value="<?php echo $data['Periode'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal_ditetapkan</label>
                                            <input class="form-control" name="Tanggal_ditetapkan"  id="pass" value="<?php echo $data['Tanggal_ditetapkan'];?>" readonly/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <label><?php echo $data['Status'];?></label>
                                            <select class="form-control" name="Status">
                                                <option>aktif</option>
                                                <option>tidak_aktif</option>
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

    $Nik_Pengajar = $_POST ['Nik_Pengajar'];
    $Periode = $_POST ['Periode'];
    $Tanggal_ditetapkan = $_POST ['Tanggal_ditetapkan'];
    $Status = $_POST ['Status'];
    
    $simpan = $_POST ['simpan'];

 	if ($simpan) {

        $sql = $koneksi->query("update  kepala_sekolah set Nik_Pengajar='$Nik_Pengajar', Periode='$Periode', Tanggal_ditetapkan='$Tanggal_ditetapkan', Status='$Status' where Nik_Pengajar='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=kepala_sekolah";

                </script>
            <?php
        
    }

 ?>
                             
                             

