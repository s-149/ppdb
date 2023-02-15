<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from pengajar where Nik_Pengajar='$_GET[id]'");
    $data = $sql->fetch_assoc();
    $sql4 = $koneksi->query("select * from user where UserName='$_GET[id]'");
    $akun = $sql4->fetch_assoc();

?>

<div class="panel panel-default">
<div class="panel-heading">
        Detail Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <!-- data siswa -->
                        <tr>
                            <td colspan="3"><h4>Data Lengkap:</h4></td>
                        </tr>
                        <tr>
                            <td>Nik_Pengajar</td>
                            <td>:</td>
                            <td><?php echo $data['Nik_Pengajar'];?></td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td><?php echo $data['Nip'];?></td>
                        </tr>
                        <tr>
                            <td>Nama_Pengajar</td>
                            <td>:</td>
                            <td><?php echo $data['Nama_Pengajar'];?></td>
                        </tr>
                        <tr>
                            <td>JK</td>
                            <td>:</td>
                            <td><?php echo $data['JK'];?></td>
                        </tr>
                        <tr>
                            <td>Tempat_Lahir</td>
                            <td>:</td>
                            <td><?php echo $data['Tempat_Lahir'];?></td>
                        </tr>
                        <tr>
                            <td>Tanggal_Lahir</td>
                            <td>:</td>
                            <td><?php echo $data['Tanggal_Lahir'];?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $data['Alamat'];?></td>
                        </tr>
                        <tr>
                            <td>No_Hp</td>
                            <td>:</td>
                            <td><?php echo $data['No_Hp'];?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><?php echo $data['Status'];?></td>
                        </tr>
                        <tr>
                            <td>Fungsi</td>
                            <td>:</td>
                            <td><?php echo $data['Fungsi'];?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?php echo $data['Jabatan'];?></td>
                        </tr>
                        <tr>
                            <td>TA</td>
                            <td>:</td>
                            <td><?php echo $data['TA'];?></td>
                        </tr>
                        <tr>
                            <td>Fhoto</td>
                            <td>:</td>
                            <td><img src='gambar/user/<?php echo $akun['Fhoto'];?>' width="100" height="75"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>  
    </div>  
</div>
