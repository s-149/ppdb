<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Asal Sekolah Pendaftar
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=asal_mula_siswa&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr><th>No</th>
                        <th>Gambar</th>
                        <th>Nik_Siswa</th>
                        <th>Masuk_Ke_Sekolah_Ini_Sebagai</th>
                        <th>Asal_Mula_Sekolah_Anak</th>
                        <th>Nama_Pendidikan_Sebelumnya</th>
                        <th>Pindahan_Dari</th>
                        <th>Nisn</th>
                        <th>Dari_Tingkat</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
                        $no = 1;

                        $sql = $koneksi->query("select * from asal_mula_siswa ");

                        while ($data= $sql->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>

                        <?php
                        $kunci=$data['Nik_Siswa'];
                            $sql1 = $koneksi->query("select * from user where UserName='$kunci' ");

                            while ($data1= $sql1->fetch_assoc()) 
                                {  ?>
                                    <td><a href="gambar/user/<?php echo  $data1['Fhoto'];?>"> <img src="gambar/user/<?php echo  $data1['Fhoto'];?>" width="75" height="50"></a> </td>
                        
                        <?php } ?>          
                    
                        <td><?php echo $data['Nik_Siswa'];?></td>                        
                        <td><?php echo $data['Masuk_Ke_Sekolah_Ini_Sebagai'];?></td>                        
                        <td><?php echo $data['Asal_Mula_Sekolah_Anak'];?></td>                        
                        <td><?php echo $data['Nama_Pendidikan_Sebelumnya'];?></td>                        
                        <td><?php echo $data['Pindahan_Dari'];?></td>                        
                        <td><?php echo $data['Nisn'];?></td>                        
                        <td><?php echo $data['Dari_Tingkat'];?></td>

                         <td>
                            <a href="?page=asal_mula_siswa&aksi=ubah&id=<?php echo $data['Nik_Siswa']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=asal_mula_siswa&aksi=hapus&id=<?php echo $data['Nik_Siswa']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                        </td>
                    </tr>


                    <?php  } ?>
                </tbody>

                </table>
              </div>
    </div>
 </div>
</div>
</div>                

<h1>update nya belum dirubah ya.......<br>sama file tambah nya juga belum dirapihkan</h1>          