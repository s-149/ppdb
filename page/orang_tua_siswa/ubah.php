<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from orang_tua_siswa where Nik_Siswa='$_GET[id]'");
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
                                            <label>Nik_Siswa</label>
                                            <input class="form-control" type="text" name="Nik_Siswa" value="<?php echo $data['Nik_Siswa'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nik_Ayah</label>
                                            <input class="form-control" type="text" name="Nik_Ayah" value="<?php echo $data['Nik_Ayah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama_Ayah</label>
                                            <input class="form-control" type="text" name="Nama_Ayah" value="<?php echo $data['Nama_Ayah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan_Tertinggi_Ayah</label>
                                            <input class="form-control" type="text" name="Pendidikan_Tertinggi_Ayah" value="<?php echo $data['Pendidikan_Tertinggi_Ayah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan_Ayah</label>
                                            <input class="form-control" type="text" name="Pekerjaan_Ayah" value="<?php echo $data['Pekerjaan_Ayah'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nik_ibu</label>
                                            <input class="form-control" type="text" name="Nik_ibu" value="<?php echo $data['Nik_ibu'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama_Ibu</label>
                                            <input class="form-control" type="text" name="Nama_Ibu" value="<?php echo $data['Nama_Ibu'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan_Tertinggi_Ibu</label>
                                            <input class="form-control" type="text" name="Pendidikan_Tertinggi_Ibu" value="<?php echo $data['Pendidikan_Tertinggi_Ibu'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan_Ibu</label>
                                            <input class="form-control" type="text" name="Pekerjaan_Ibu" value="<?php echo $data['Pekerjaan_Ibu'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama_Wali_Murid</label>
                                            <input class="form-control" type="text" name="Nama_Wali_Murid" value="<?php echo $data['Nama_Wali_Murid'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan_Tertinggi_Wali_Murid</label>
                                            <input class="form-control" type="text" name="Pendidikan_Tertinggi_Wali_Murid" value="<?php echo $data['Pendidikan_Tertinggi_Wali_Murid'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Hubungan_Terhadap_Anak</label>
                                            <input class="form-control" type="text" name="Hubungan_Terhadap_Anak" value="<?php echo $data['Hubungan_Terhadap_Anak'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan_Wali_Murid</label>
                                            <input class="form-control" type="text" name="Pekerjaan_Wali_Murid" value="<?php echo $data['Pekerjaan_Wali_Murid'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>No_KK</label>
                                            <input class="form-control" type="text" name="No_KK" value="<?php echo $data['No_KK'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>No_Hp</label>
                                            <input class="form-control" type="text" name="No_Hp" value="<?php echo $data['No_Hp'];?>" />
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

    $Nik_Siswa = $_POST ['Nik_Siswa'];
    $Nik_Ayah = $_POST ['Nik_Ayah'];
    $Nama_Ayah = $_POST ['Nama_Ayah'];
    $Pendidikan_Tertinggi_Ayah = $_POST ['Pendidikan_Tertinggi_Ayah'];
    $Pekerjaan_Ayah = $_POST ['Pekerjaan_Ayah'];
    $Nik_ibu = $_POST ['Nik_ibu'];
    $Nama_Ibu = $_POST ['Nama_Ibu'];
    $Pendidikan_Tertinggi_Ibu = $_POST ['Pendidikan_Tertinggi_Ibu'];
    $Pekerjaan_Ibu = $_POST ['Pekerjaan_Ibu'];
    $Nama_Wali_Murid = $_POST ['Nama_Wali_Murid'];
    $Pendidikan_Tertinggi_Wali_Murid = $_POST ['Pendidikan_Tertinggi_Wali_Murid'];
    $Hubungan_Terhadap_Anak = $_POST ['Hubungan_Terhadap_Anak'];
    $Pekerjaan_Wali_Murid = $_POST ['Pekerjaan_Wali_Murid'];
    $No_KK = $_POST ['No_KK'];
    $No_Hp = $_POST ['No_Hp'];
       
    $simpan = $_POST ['simpan'];

    if ($simpan) {
//Teleph`Nik_Siswa`, `Nik_Ayah`, `Nama_Ayah`, `Pendidikan_Tertinggi_Ayah`, `Pekerjaan_Ayah`, `Nik_ibu`, `Nama_Ibu`, `Pendidikan_Tertinggi_Ibu`, `Pekerjaan_Ibu`, `Nama_Wali_Murid`, `Pendidikan_Tertinggi_Wali_Murid`, `one`
        $sql = $koneksi->query("update  orang_tua_siswa set `Nik_Siswa`='$Nik_Siswa', `Nik_Ayah`='$Nik_Ayah', `Nama_Ayah`='$Nama_Ayah', `Pendidikan_Tertinggi_Ayah`='$Pendidikan_Tertinggi_Ayah', `Pekerjaan_Ayah`='$Pekerjaan_Ayah', `Nik_ibu`='$Nik_ibu', `Nama_Ibu`='$Nama_Ibu', `Pendidikan_Tertinggi_Ibu`='$Pendidikan_Tertinggi_Ibu', `Pekerjaan_Ibu`='$Pekerjaan_Ibu', `Nama_Wali_Murid`='$Nama_Wali_Murid', `Pendidikan_Tertinggi_Wali_Murid`='$Pendidikan_Tertinggi_Wali_Murid', `Hubungan_Terhadap_Anak`='$Hubungan_Terhadap_Anak', `Pekerjaan_Wali_Murid`='$Pekerjaan_Wali_Murid', `No_Hp`='$No_Hp' where Nik_Siswa='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=orang_tua_siswa";

                </script>
            <?php
        
    }

 ?>
                             
                             

