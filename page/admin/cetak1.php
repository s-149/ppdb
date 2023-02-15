<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from siswa where Nik_Siswa='$_GET[id]'");
    $data = $sql->fetch_assoc();
    $sql1 = $koneksi->query("select * from orang_tua_siswa where Nik_Siswa='$_GET[id]'");
    $orang_tua_siswa = $sql1->fetch_assoc();
    $sql2 = $koneksi->query("select * from asal_mula_siswa where Nik_Siswa='$_GET[id]'");
    $asal_mula_siswa = $sql2->fetch_assoc();
    //$sql3 = $koneksi->query("select * from kelengkapan_data where Nik_Siswa='$_GET[id]'");
    //$kelengkapan_data = $sql3->fetch_assoc();
    $sql4 = $koneksi->query("select * from user where UserName='$_GET[id]'");
    $akun = $sql4->fetch_assoc();

?>
<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Pengguna
    </div>
    <div class="panel-body">
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
                            <td><?php echo $akun['Password'];?></td>
                        </tr>
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