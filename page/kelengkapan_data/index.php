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
                <a href="?page=kelengkapan_data&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nik_Siswa</th>
                        <th>Gambar</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from kelengkapan_data ");

                        while ($data= $sql->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['Nik_Siswa'];?></td>
                        <td><a href="gambar/kelengkapan_data/<?php echo  $data['Fhoto'];?>"> <img src="gambar/kelengkapan_data/<?php echo  $data['Fhoto'];?>" width="75" height="50"></a> </td>

                         <td>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=kelengkapan_data&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

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