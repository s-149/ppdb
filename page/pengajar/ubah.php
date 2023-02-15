<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from pengajar where Nik_Pengajar='$_GET[id]'");
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
                                            <label>Nik_Pengajar</label>
                                            <input class="form-control" type="text" name="Nik_Pengajar" value="<?php echo $data['Nik_Pengajar'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nip</label>
                                            <input class="form-control" type="text" name="Nip" value="<?php echo $data['Nip'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama_Pengajar</label>
                                            <input class="form-control" type="text" name="Nama_Pengajar" value="<?php echo $data['Nama_Pengajar'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>JK</label>
                                            <input class="form-control" type="text" name="JK" value="<?php echo $data['JK'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat_Lahir</label>
                                            <input class="form-control" type="text" name="Tempat_Lahir" value="<?php echo $data['Tempat_Lahir'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal_Lahir</label>
                                            <input class="form-control" type="text" name="Tanggal_Lahir" value="<?php echo $data['Tanggal_Lahir'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="text" name="Alamat" value="<?php echo $data['Alamat'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>No_Hp</label>
                                            <input class="form-control" type="text" name="No_Hp" value="<?php echo $data['No_Hp'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input class="form-control" type="text" name="Status" value="<?php echo $data['Status'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Fungsi</label>
                                            <input class="form-control" type="text" name="Fungsi" value="<?php echo $data['Fungsi'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input class="form-control" type="text" name="Jabatan" value="<?php echo $data['Jabatan'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>TA</label>
                                            <input class="form-control" type="text" name="TA" value="<?php echo $data['TA'];?>" />
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
    $Status = $_POST ['Status'];
    $Fungsi = $_POST ['Fungsi'];
    $Jabatan = $_POST ['Jabatan'];
    $TA = $_POST ['TA'];
       
    $simpan = $_POST ['simpan'];

 	if ($simpan) {
//Teleph`Nik_Pengajar`, `Nip`, `Nama_Pengajar`, `JK`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `No_Hp`, `Status`, `Fungsi`, `Jabatan`, `one`
        $sql = $koneksi->query("update  pengajar set `Nik_Pengajar`='$Nik_Pengajar', `Nip`='$Nip', `Nama_Pengajar`='$Nama_Pengajar', `JK`='$JK', `Tempat_Lahir`='$Tempat_Lahir', `Tanggal_Lahir`='$Tanggal_Lahir', `Alamat`='$Alamat', `No_Hp`='$No_Hp', `Status`='$Status', `Fungsi`='$Fungsi', `Jabatan`='$Jabatan', `TA`='$TA' where Nik_Pengajar='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=pengajar";

                </script>
            <?php
        
    }

 ?>
                             
                             

