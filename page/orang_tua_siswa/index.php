<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Orang Tua
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=orang_tua_siswa&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr><th>No</th>
                        <th>Gambar</th>
                        <th>Nik_Siswa</th>
                        <th>Nik_Ayah</th>
                        <th>Nama_Ayah</th>
                        <th>Pendidikan_Tertinggi_Ayah</th>
                        <th>Pekerjaan_Ayah</th>
                        <th>Nik_ibu</th>
                        <th>Nama_Ibu</th>
                        <th>Pendidikan_Tertinggi_Ibu</th>
                        <th>Pekerjaan_Ibu</th>
                        <th>Nama_Wali_Murid</th>
                        <th>Pendidikan_Tertinggi_Wali_Murid</th>
                        <th>Pekerjaan_Wali_Murid</th>
                        <th>No_KK</th>
                        <th>No_Hp</th>

                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
                        $no = 1;

                        $sql = $koneksi->query("select * from orang_tua_siswa ");

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
                        <td><?php echo $data['Nik_Ayah'];?></td>                        
                        <td><?php echo $data['Nama_Ayah'];?></td>                        
                        <td><?php echo $data['Pendidikan_Tertinggi_Ayah'];?></td>                        
                        <td><?php echo $data['Pekerjaan_Ayah'];?></td>                        
                        <td><?php echo $data['Nik_ibu'];?></td>                        
                        <td><?php echo $data['Nama_Ibu'];?></td>                        
                        <td><?php echo $data['Pendidikan_Tertinggi_Ibu'];?></td>                        
                        <td><?php echo $data['Pekerjaan_Ibu'];?></td>                        
                        <td><?php echo $data['Nama_Wali_Murid'];?></td>                        
                        <td><?php echo $data['Pendidikan_Tertinggi_Wali_Murid'];?></td>
                        <td><?php echo $data['Pekerjaan_Wali_Murid'];?></td>
                        <td><?php echo $data['No_KK'];?></td>
                        <td><?php echo $data['No_Hp'];?></td>

                         <td>
                            <a href="?page=orang_tua_siswa&aksi=ubah&id=<?php echo $data['Nik_Siswa']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=orang_tua_siswa&aksi=hapus&id=<?php echo $data['Nik_Siswa']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

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