<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from user where UserName='$id'");
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
                                            <label>Username</label>
                                            <input class="form-control" name="username" value="<?php echo $data['UserName'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="pass" type="text" id="pass" value="<?php echo $data['Password'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Level</label>
                                            <input class="form-control" name="level"  id="pass" value="<?php echo $data['Level'];?>" readonly/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Akses</label>
                                            <input class="form-control" name="akses"  id="pass" value="<?php echo $data['akses'];?>" readonly/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Foto</label>
                                            <label><img src='gambar/user/<?php echo $data['Fhoto'];?>' width="100" height="75"></label>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Ganti Foto</label>
                                            <input type="file" name="foto" id="foto" />
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

 	$username = $_POST ['username'];
 	$pass = $_POST ['pass'];
    $level = $_POST ['level'];
    $akses = $_POST ['akses'];
    
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];

    $folder='gambar/user/';
    $gambar=date('d_M_Y_h_i_s').'_'.$foto;

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
        if (empty($foto)) {
           
        $sql = $koneksi->query("update  user set UserName='$username', Password='$pass', Level='$level', akses='$akses' where UserName='$id'");

//data siswa
        $sql1 = $koneksi->query("update  siswa set `Nik_Siswa`='$username' where Nik_Siswa='$id'");

// data orang tua
        $sql2 = $koneksi->query("update  orang_tua_siswa set `Nik_Siswa`='$username' where Nik_Siswa='$id'");

// data asal sekolah
        $sql3 = $koneksi->query("update  asal_mula_siswa set `Nik_Siswa`='$username' where Nik_Siswa='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=kelas2";

                </script>
            <?php
        
    }else{        
        $upload = move_uploaded_file($lokasi,$folder.$gambar);

           
        $sql = $koneksi->query("update  user set UserName='$username', Password='$pass', Level='$level', akses='$akses' where UserName='$id'");

//data siswa
        $sql1 = $koneksi->query("update  siswa set `Nik_Siswa`='$username' where Nik_Siswa='$id'");

// data orang tua
        $sql2 = $koneksi->query("update  orang_tua_siswa set `Nik_Siswa`='$username' where Nik_Siswa='$id'");

// data asal sekolah
        $sql3 = $koneksi->query("update  asal_mula_siswa set `Nik_Siswa`='$username' where Nik_Siswa='$id'");


 		
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Diperbaharui");
 					window.location.href="?page=kelas2";

 				</script>
 			<?php
 		}
 	}

 ?>
                             
                             

