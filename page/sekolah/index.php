<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Sekolah
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=sekolah&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>NSS</th>
                        <th>Tahun Berdiri</th>
                        <th>Pendiri</th>
                        <th>Nama Sekolah</th>
                        <th>Tingkat Sekolah</th>
                        <th>Status Sekolah</th>
                        <th>Akreditasi</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Biografi</th>
                        <th>Alamat</th>
                        <th>No Telephone</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
                        $no = 1;

                        $sql = $koneksi->query("select * from sekolah ");

                        while ($data= $sql->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $data['NSS'];?></td>                        
                        <td><?php echo $data['Tahun_Berdiri'];?></td>                        
                        <td><?php echo $data['Pendiri'];?></td>                        
                        <td><?php echo $data['NamaSekolah'];?></td>                        
                        <td><?php echo $data['JenjangSekolah'];?></td>                        
                        <td><?php echo $data['StatusSekolah'];?></td>                        
                        <td><?php echo $data['Terakreditasi'];?></td>                        
                        <td><?php echo $data['Visi'];?></td>                        
                        <td><?php echo $data['Misi'];?></td>                        
                        <td><?php echo $data['Biografi'];?></td>                        
                        <td><?php echo $data['Alamat'];?></td>                        
                        <td><?php echo $data['Telephone'];?></td>

                         <td>
                            <a href="?page=sekolah&aksi=ubah&id=<?php echo $data['NSS']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=sekolah&aksi=hapus&id=<?php echo $data['NSS']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

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