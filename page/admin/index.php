<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Riwayat Admin
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=admin&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nik_Pengajar</th>
                        <th>Tanggal_ditetapkan</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    // INSERT INTO `admin`(`Nik_Pengajar`, `Periode`, `Tanggal_ditetapkan`)

                        $no = 1;

                        $sql = $koneksi->query("select * from admin ");

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
                        <td><?php echo $data['Tanggal_ditetapkan'];?></td>

                         <td>
                            <a href="?page=admin&aksi=detail&id=<?php echo $data['Nik_Pengajar']; ?>" class="btn btn-primary" ><i class="fa fa-eye"></i> Detail</a>
                            <a href="?page=admin&aksi=ubah&id=<?php echo $data['Nik_Pengajar']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=admin&aksi=hapus&id=<?php echo $data['Nik_Pengajar']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

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