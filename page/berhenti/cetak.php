<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Pengguna
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Username</th>
                        <th>Password</th>
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
                        <td><img src="gambar/user/<?php echo  $data['Fhoto'];?>" width="75" height="50"></td>
                        <td><?php echo $data['UserName'];?></td>
                        <td><?php echo $data['Password'];?></td>
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