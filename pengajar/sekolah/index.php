<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Sekolah
    </div>
    <div class="panel-body">
        <div class="table-responsive">
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

                    </tr>


                    <?php  } ?>
                </tbody>

                </table>
              </div>
    </div>
 </div>
</div>
</div>                          