<?php
    
    $id=$_GET['id'];
    $sql4 = $koneksi->query("select * from user where UserName='$_GET[id]'");
    $akun = $sql4->fetch_assoc();
    $hash = password_hash($akun['Password'], PASSWORD_DEFAULT);
    $hashcode= base64_encode ($akun['Password']);
    $decode= base64_decode ($hashcode) ;

?>

<div class="panel panel-default">
<div class="panel-heading">
        Detail Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <div>
                <a href="?page=user&aksi=ubah_password&id=<?=$id; ?>" class="btn btn-warning" style="margin-top: 8px;"><i class="fa fa-edit"></i> Ubah Password</a>
            </div><br>
            <div>
                <a href="?page=user&aksi=ubah_fhoto&id=<?=$id; ?>" class="btn btn-warning" style="margin-top: 8px;"><i class="fa fa-edit"></i> Ubah Fhoto</a>
            </div><br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>UserName</td>
                            <td>:</td>
                            <td><?php echo $akun['UserName'];?></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><?php echo $hash;?><form action="" method="POST"><button type="submit" name="hash">Lihat</button></form></td>
                        </tr>
                        <?php if (isset($_POST['hash'])) { ?>
                        <tr>
                            <td>Password Asli</td>
                            <td>:</td>
                            <td><?= $decode;?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td>Level</td>
                            <td>:</td>
                            <td><?php echo $akun['Level'];?></td>
                        </tr>
                        <tr>
                            <td>akses</td>
                            <td>:</td>
                            <td><?php echo $akun['akses'];?></td>
                        </tr>
                    </table>
                </div>
                <label>Foto</label>
                <label><img src='gambar/user/<?php echo $akun['Fhoto'];?>' width="100" height="75"></label>
            </div>
        </div>  
    </div>  
</div>
