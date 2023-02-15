<?php
    
    $id=$_GET['id'];
?>
<div class="panel panel-default">
<div class="panel-heading">
        Perbarui Tingkat Siswa :
 </div> 
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" enctype="multipart/form-data" >
                                        <div class="form-group">
                                            <label>Nik Siswa :</label>
                                            <input type="text" name="Nik_Siswa" class="form-control" value="<?=$id?>" readonly>
                                        </div>
                                            <!-- Naik Tingkat -->
                                            <div class="form-group">
                                                <select class="form-control" name="tingkat" >
                                                    <option value="">Perbarui Tingkat Siswa :</option>
                                                    <option value=""></option>
                                                    <option>baru</option>
                                                    <option>ditolak</option>
                                                    <option>diterima</option>
                                                    <option>aktif</option>
                                                    <option>kelas1</option>
                                                    <option>kelas2</option>
                                                    <option>kelas3</option>
                                                    <option>kelas4</option>
                                                    <option>kelas5</option>
                                                    <option>kelas6</option>
                                                    <option>pindah</option>
                                                    <option>berhenti</option>
                                                    <option value="drop_out">dikeluarkan(drop out)</option>
                                                    <option>lulus</option>
                                                </select>
                                            </div>
                                            <!-- Selesai -->

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
    $Nik_Siswa= $_POST['Nik_Siswa'];
    $tingkat = $_POST ['tingkat'];
       
    $simpan = $_POST ['simpan'];

    if ($simpan) {

                            //menjalankan logika
                            if ($tingkat=='baru' or $tingkat=='diterima' or $tingkat=='aktif') 
                                {
                                    //menjalankan perintah
                                    $sql = $koneksi->query("update  siswa set `Status_Siswa`='$tingkat' where `Nik_Siswa`='$Nik_Siswa'");
                                }

                            if ($tingkat=='kelas1' or $tingkat=='kelas2' or $tingkat=='kelas3' or $tingkat=='kelas4' or $tingkat=='kelas5' or $tingkat=='kelas6') 
                                {
                                    //menjalankan perintah
                                    $sql = $koneksi->query("update  siswa set `Status_Siswa`='aktif',`Kelas`='$tingkat' where  `Nik_Siswa`='$Nik_Siswa'");
                                }
                            if ($tingkat=='lulus') 
                                {
                                    //menjalankan perintah
                                    $sql = $koneksi->query("update  siswa set `Status_Siswa`='$tingkat',`Kelas`='alumni' where  `Nik_Siswa`='$Nik_Siswa'");
                                }
                            if ($tingkat=='ditolak' or $tingkat=='dikeluarkan' or $tingkat=='pindah' or $tingkat=='berhenti') 
                                {
                                    //menjalankan perintahperintah
                                    $sql = $koneksi->query("update  siswa set `Status_Siswa`='$tingkat' where  `Nik_Siswa`='$Nik_Siswa'");
                                    
                                }
        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=pindah";

                </script>
            <?php
        
    }

 ?>
                             
                             

