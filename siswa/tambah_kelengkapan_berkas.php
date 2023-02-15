
    <section class="learning_part" id="daftar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Penerimaan Peserta Didik Baru</p>
                        <h2>PPDB</h2>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="course bg-white h-100 align-self-stretch">
                        <figure class="m-0">
                            <div class="card">
                                <div class="card">
                                    <?php
    
    $id=$user;
    $sql = $koneksi->query("select * from siswa where Nik_Siswa='$user'");
    $data = $sql->fetch_assoc();
    $sql1 = $koneksi->query("select * from orang_tua_siswa where Nik_Siswa='$user'");
    $orang_tua_siswa = $sql1->fetch_assoc();
    $sql2 = $koneksi->query("select * from asal_mula_siswa where Nik_Siswa='$user'");
    $asal_mula_siswa = $sql2->fetch_assoc();
    //$sql3 = $koneksi->query("select * from kelengkapan_data where Nik_Siswa='$_GET[id]'");
    //$kelengkapan_data = $sql3->fetch_assoc();
    $sql4 = $koneksi->query("select * from user where UserName='$user'");
    $akun = $sql4->fetch_assoc();

?>

<div class="panel panel-default">
<div class="panel-heading">
        Formulir PPDB
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <h4>Tambah Kelengkapan Berkas :</h4>

            <form action="" method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label>File Berkas</label>
                    <input type="file" name="foto" id="foto" required autofocus />
                </div>                
                <div>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </div>
         </div>

         </form>
          </div>
    </div>  
</div>

<?php if (isset($_POST['simpan'])) {
    
    $Nik_Siswa = $user;
    
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];

    $folder='gambar/kelengkapan_data/';
    $gambar=date('d_M_Y_h_i_s').'_'.$foto;
    $upload = move_uploaded_file($lokasi,$folder.$gambar);
            
        $sql = $koneksi->query("INSERT INTO `kelengkapan_data`(`Nik_Siswa`, `Fhoto`) values('$Nik_Siswa', '$gambar')");

        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?kelengkapan_berkas=";

                </script>
            <?php } ?>


                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div> 

        </div>
    </section>

<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
      </div>
 </div>  
 </div>  
 </div>


 <?php

                             
                             

