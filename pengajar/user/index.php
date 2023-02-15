<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Pengguna
    </div>
    <div class="panel-body">
        <div class="table-responsive">

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Akses</th>
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

                    </tr>


                    <?php  } ?>
                </tbody>

                </table>
              </div>
    </div>
 </div>
</div>
</div>                          