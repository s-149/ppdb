<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from sekolah where NSS='$_GET[id]'");
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
                                            <label>NSS</label>
                                            <input class="form-control" type="text" name="NSS" value="<?php echo $data['NSS'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun_Berdiri</label>
                                            <input class="form-control" type="text" name="Tahun_Berdiri" value="<?php echo $data['Tahun_Berdiri'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pendiri</label>
                                            <input class="form-control" type="text" name="Pendiri" value="<?php echo $data['Pendiri'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>NamaSekolah</label>
                                            <input class="form-control" type="text" name="NamaSekolah" value="<?php echo $data['NamaSekolah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>JenjangSekolah</label>
                                            <input class="form-control" type="text" name="JenjangSekolah" value="<?php echo $data['JenjangSekolah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>StatusSekolah</label>
                                            <input class="form-control" type="text" name="StatusSekolah" value="<?php echo $data['StatusSekolah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Terakreditasi</label>
                                            <input class="form-control" type="text" name="Terakreditasi" value="<?php echo $data['Terakreditasi'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Visi</label>
                                            <input class="form-control" type="text" name="Visi" value="<?php echo $data['Visi'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Misi</label>
                                            <input class="form-control" type="text" name="Misi" value="<?php echo $data['Misi'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Biografi</label>
                                            <input class="form-control" type="text" name="Biografi" value="<?php echo $data['Biografi'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="text" name="Alamat" value="<?php echo $data['Alamat'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input class="form-control" type="text" name="Telephone" value="<?php echo $data['Telephone'];?>" />
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


    $NSS = $_POST ['NSS'];
    $Tahun_Berdiri = $_POST ['Tahun_Berdiri'];
    $Pendiri = $_POST ['Pendiri'];
    $NamaSekolah = $_POST ['NamaSekolah'];
    $JenjangSekolah = $_POST ['JenjangSekolah'];
    $StatusSekolah = $_POST ['StatusSekolah'];
    $Terakreditasi = $_POST ['Terakreditasi'];
    $Visi = $_POST ['Visi'];
    $Misi = $_POST ['Misi'];
    $Biografi = $_POST ['Biografi'];
    $Alamat = $_POST ['Alamat'];
    $Telephone = $_POST ['Telephone'];
       
    $simpan = $_POST ['simpan'];

 	if ($simpan) {
//Teleph`NSS`, `Tahun_Berdiri`, `Pendiri`, `NamaSekolah`, `JenjangSekolah`, `StatusSekolah`, `Terakreditasi`, `Visi`, `Misi`, `Biografi`, `Alamat`, `one`
        $sql = $koneksi->query("update  sekolah set `NSS`='$NSS', `Tahun_Berdiri`='$Tahun_Berdiri', `Pendiri`='$Pendiri', `NamaSekolah`='$NamaSekolah', `JenjangSekolah`='$JenjangSekolah', `StatusSekolah`='$StatusSekolah', `Terakreditasi`='$Terakreditasi', `Visi`='$Visi', `Misi`='$Misi', `Biografi`='$Biografi', `Alamat`='$Biografi', `Telephone`='$Telephone' where NSS='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=sekolah";

                </script>
            <?php
        
    }

 ?>
                             
                             

