<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label> Nik Siswa</label>
                    <input type="number" class="form-control" name="Nik_Siswa"  required autofocus />
                </div>     

                <div class="form-group">
                    <label> Nik_Ayah</label>
                    <input type="number" class="form-control" name="Nik_Ayah"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Nama_Ayah</label>
                    <input type="text" class="form-control" name="Nama_Ayah"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Pendidikan_Tertinggi_Ayah</label>
                    <input type="text" class="form-control" name="Pendidikan_Tertinggi_Ayah"  required autofocus />
                </div>

                <div class="form-group">
                    <label> Pekerjaan_Ayah</label>
                    <input type="text" class="form-control" name="Pekerjaan_Ayah" required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Nik_ibu</label>
                    <input type="number" class="form-control" name="Nik_ibu"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Nama_Ibu</label>
                    <input type="text" class="form-control" name="Nama_Ibu"  required autofocus />
                </div>
                
                <div class="form-group">
                    <label> Pendidikan_Tertinggi_Ibu</label>
                    <input type="text" class="form-control" name="Pendidikan_Tertinggi_Ibu"  required autofocus />
                </div>
                                
                <div class="form-group">
                    <label> Pekerjaan_Ibu</label>
                    <input type="text" class="form-control" name="Pekerjaan_Ibu"  required autofocus>
                </div>
                
                <div class="form-group">
                    <label> Nama_Wali_Murid</label>
                    <input type="text" class="form-control" name="Nama_Wali_Murid" />
                </div>
                
                <div class="form-group">
                    <label> Pendidikan_Tertinggi_Wali_Murid</label>
                    <input type="text" class="form-control" name="Pendidikan_Tertinggi_Wali_Murid" />
                </div>
                <div class="form-group">
                    <label> Hubungan_Terhadap_Anak</label>
                    <input type="text" class="form-control" name="Hubungan_Terhadap_Anak" />
                </div>
                <div class="form-group">
                    <label> Pekerjaan_Wali_Murid</label>
                    <input type="text" class="form-control" name="Pekerjaan_Wali_Murid" />
                </div>
                <div class="form-group">
                    <label> No_KK</label>
                    <input type="text" class="form-control" name="No_KK"  required autofocus />
                </div>
                <div class="form-group">
                    <label> No_Hp</label>
                    <input type="number" class="form-control" name="No_Hp"  required autofocus>
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
        $sql = $koneksi->query("INSERT INTO `orang_tua_siswa`(`Nik_Siswa`, `Nik_Ayah`, `Nama_Ayah`, `Pendidikan_Tertinggi_Ayah`, `Pekerjaan_Ayah`, `Nik_ibu`, `Nama_Ibu`, `Pendidikan_Tertinggi_Ibu`, `Pekerjaan_Ibu`, `Nama_Wali_Murid`, `Pendidikan_Tertinggi_Wali_Murid`, `Hubungan_Terhadap_Anak`, `Pekerjaan_Wali_Murid`, `No_KK`, `No_Hp`) VALUES('$Nik_Siswa', '$Nik_Ayah', '$Nama_Ayah', '$Pendidikan_Tertinggi_Ayah', '$Pekerjaan_Ayah', '$Nik_ibu', '$Nama_Ibu', '$Pendidikan_Tertinggi_Ibu', '$Pekerjaan_Ibu', '$Nama_Wali_Murid', '$Pendidikan_Tertinggi_Wali_Murid', '$Hubungan_Terhadap_Anak', '$Pekerjaan_Wali_Murid', '$No_KK', '$No_Hp')");

        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=orang_tua_siswa";

                </script>
            <?php
        
    }

 ?>
                             
                             

