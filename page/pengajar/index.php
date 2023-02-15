<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Pengajar
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=pengajar&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr><th>No</th>
                        <th>Gambar</th>
                        <th>Nik_Pengajar</th>
                        <th>Nip</th>
                        <th>Nama_Pengajar</th>
                        <th>JK</th>
                        <th>Tempat_Lahir</th>
                        <th>Tanggal_Lahir</th>
                        <th>Alamat</th>
                        <th>No_Hp</th>
                        <th>Status</th>
                        <th>Fungsi</th>
                        <th>Jabatan</th>
                        <th>TA</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
                        $no = 1;

                        $sql = $koneksi->query("select * from pengajar ");

                        while ($data= $sql->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>

                        <?php
                        $kunci=$data['Nik_Pengajar'];
                            $sql1 = $koneksi->query("select * from user where UserName='$kunci' ");

                            while ($data1= $sql1->fetch_assoc()) 
                                {  ?>
                                    <td><a href="gambar/user/<?php echo  $data1['Fhoto'];?>"> <img src="gambar/user/<?php echo  $data1['Fhoto'];?>" width="75" height="50"></a> </td>
                        
                        <?php } ?>          
                    
                        <td><?php echo $data['Nik_Pengajar'];?></td>                        
                        <td><?php echo $data['Nip'];?></td>                        
                        <td><?php echo $data['Nama_Pengajar'];?></td>                        
                        <td><?php echo $data['JK'];?></td>                        
                        <td><?php echo $data['Tempat_Lahir'];?></td>                        
                        <td><?php echo $data['Tanggal_Lahir'];?></td>                        
                        <td><?php echo $data['Alamat'];?></td>                        
                        <td><?php echo $data['No_Hp'];?></td>                        
                        <td><?php echo $data['Status'];?></td>                        
                        <td><?php echo $data['Fungsi'];?></td>                        
                        <td><?php echo $data['Jabatan'];?></td>                        
                        <td><?php echo $data['TA'];?></td>

                         <td>
                            <a href="?page=pengajar&aksi=ubah&id=<?php echo $data['Nik_Pengajar']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=pengajar&aksi=hapus&id=<?php echo $data['Nik_Pengajar']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

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