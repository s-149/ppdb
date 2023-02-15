<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Riwayat Kepala Sekolah
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nik_Pengajar</th>
                        <th>Periode</th>
                        <th>Tanggal_ditetapkan</th>
                        <th>Status</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    // INSERT INTO `kepala_sekolah`(`Nik_Pengajar`, `Periode`, `Tanggal_ditetapkan`)

                        $no = 1;

                        $sql = $koneksi->query("select * from kepala_sekolah ");

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
                        <td><?php echo $data['Periode'];?></td>
                        <td><?php echo $data['Tanggal_ditetapkan'];?></td>
                        <td><?php echo $data['Status'];?></td>

                         <td>
                            <a href="?page=kepala_sekolah&aksi=detail&id=<?php echo $data['Nik_Pengajar']; ?>" class="btn btn-primary" ><i class="fa fa-eye"></i> Detail</a>
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