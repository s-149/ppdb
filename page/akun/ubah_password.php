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
                                            <label>Password Baru</label>
                                            <input class="form-control" name="pass" type="text" id="pass" />
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
 	$pass = $_POST ['pass'];
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
        $sql = $koneksi->query("update  user set Password='$pass' where UserName='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=akun";

                </script>
            <?php
        
 	}

 ?>
                             
                             

