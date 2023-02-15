
<div class="panel panel-default">
<div class="panel-heading">
        Perbarui Tingkat Siswa :
 </div> 
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" enctype="multipart/form-data" >
                                            <!-- Naik Tingkat -->
                                            <div class="form-group">
                                                <select class="form-control" name="tingkat" >
                                                    <option value="">Perbarui Tingkat Siswa :</option>
                                                    <option value=""></option>
                                                    <option>baru</option>
                                                    <option>ditolak</option>
                                                    <option>diterima</option>
                                                    <option>aktif</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
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

    $tingkat = $_POST ['tingkat'];
       
    $simpan = $_POST ['simpan'];

    if ($simpan) {

                            //menjalankan logika
                            if ($tingkat=='baru' or $tingkat=='diterima' or $tingkat=='aktif') 
                                {
                                    //menjalankan perintah
                                    $sql = $koneksi->query("update  siswa set `Status_Siswa`='$tingkat' where `Kelas`='3'");
                                }

                            if ($tingkat=='1' or $tingkat=='2' or $tingkat=='3' or $tingkat=='4' or $tingkat=='5' or $tingkat=='6') 
                                {
                                    //menjalankan perintah
                                    $sql = $koneksi->query("update  siswa set `Status_Siswa`='aktif',`Kelas`='$tingkat' where `Kelas`='3'");
                                }
                            if ($tingkat=='lulus') 
                                {
                                    //menjalankan perintah
                                    $sql = $koneksi->query("update  siswa set `Status_Siswa`='$tingkat',`Kelas`='alumni' where `Kelas`='3'");
                                }
                            if ($tingkat=='ditolak' or $tingkat=='dikeluarkan' or $tingkat=='pindah' or $tingkat=='berhenti') 
                                {
                                    //menjalankan perintahperintah
                                    $sql = $koneksi->query("update  siswa set `Status_Siswa`='$tingkat' where `Kelas`='3'");
                                }
        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=siswa";

                </script>
            <?php
        
    }

 ?>
                             
                             

