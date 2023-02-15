<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Pengguna
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=user&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <div>
                <a href="cetak.php?page=user&aksi=semua" target="_blank" class="btn btn-warning" style="margin-top: 8px;"><i class="fa fa-print"></i> Cetak</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Akses</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from user ");

                        while ($data= $sql->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><a href="gambar/user/<?php echo  $data['Fhoto'];?>"> <img src="gambar/user/<?php echo  $data['Fhoto'];?>" width="75" height="50"></a> </td>
                        <td><?php echo $data['UserName'];?></td>
                        <td><?php echo $data['Level'];?></td>
                        <td><?php echo  $data['akses'];?></td>

                         <td>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=user&aksi=hapus&id=<?php echo $data['UserName']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                            <a href="?page=user&aksi=detail&id=<?php echo $data['UserName']; ?>" class="btn btn-primary" ><i class="fa fa-eye"></i> detail</a>
                            <a href="cetak.php?page=user&aksi=1&id=<?php echo $data['UserName']; ?>" class="btn btn-warning"" target="_blank" class="btn btn-warning" style="margin-top: 8px;"><i class="fa fa-print"></i> Cetak</a>

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