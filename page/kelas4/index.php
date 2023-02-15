<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Siswa kelas4
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=kelas4&aksi=rubah_tingkat" class="btn btn-warning" style="margin-top: 8px;"><i class="fa fa-edit"></i> Ubah Tingkat</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr><th>No</th>
                        <th>Gambar</th>
                        <th>Nik_Siswa</th>
                        <th>Nis</th>
                        <th>Nisn</th>
                        <th>Nama_Lengkap</th>
                        <th>Nama_Panggilan</th>
                        <th>Jenis_Kelamin</th>
                        <th>Tempat_Lahir</th>
                        <th>Tanggal_Lahir</th>
                        <th>Agama</th>
                        <th>Kewarganegaraan</th>
                        <th>Anak_Ke</th>
                        <th>Banyak_Saudara_Kandung</th>
                        <th>Banyak_Saudara_Tiri</th>
                        <th>Banyak_Saudara_Angkat</th>
                        <th>Bahasa_Sehari_Hari</th>
                        <th>Berat_Badan</th>
                        <th>Tinggi_Badan</th>
                        <th>Golongan_Darah</th>
                        <th>Penyakit_Yang_Pernah_Diderita</th>
                        <th>Tinggal_Bersama</th>
                        <th>Jarak_Rumah_Ke_Sekolah</th>
                        <th>Alamat_Rumah</th>
                        <th>Status_Siswa</th>
                        <th>Kelas</th>
                        <th>Tanggal_Mendaftar</th>
                        <th>TA</th>
                        <!--th>No_Pendaftaran</th-->
                        <th>Tanggal_Diperbarui</th>

                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
                        $no = 1;

                        $sql = $koneksi->query("select * from siswa where Status_Siswa='aktif' and Kelas='kelas4' ");

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
                        <td><?php echo $data['Nis'];?></td>                        
                        <td><?php echo $data['Nisn'];?></td>                        
                        <td><?php echo $data['Nama_Lengkap'];?></td>                        
                        <td><?php echo $data['Nama_Panggilan'];?></td>                        
                        <td><?php echo $data['Jenis_Kelamin'];?></td>                        
                        <td><?php echo $data['Tempat_Lahir'];?></td>                        
                        <td><?php echo $data['Tanggal_Lahir'];?></td>                        
                        <td><?php echo $data['Agama'];?></td>                        
                        <td><?php echo $data['Kewarganegaraan'];?></td>                        
                        <td><?php echo $data['Anak_Ke'];?></td>                        
                        <td><?php echo $data['Banyak_Saudara_Kandung'];?></td>                      
                        <td><?php echo $data['Banyak_Saudara_Tiri'];?></td>                      
                        <td><?php echo $data['Banyak_Saudara_Angkat'];?></td>                      
                        <td><?php echo $data['Bahasa_Sehari_Hari'];?></td>                      
                        <td><?php echo $data['Berat_Badan'];?></td>                      
                        <td><?php echo $data['Tinggi_Badan'];?></td>                      
                        <td><?php echo $data['Golongan_Darah'];?></td>                      
                        <td><?php echo $data['Penyakit_Yang_Pernah_Diderita'];?></td>                      
                        <td><?php echo $data['Tinggal_Bersama'];?></td>                      
                        <td><?php echo $data['Jarak_Rumah_Ke_Sekolah'];?></td>                      
                        <td><?php echo $data['Alamat_Rumah'];?></td>                      
                        <td><?php echo $data['Status_Siswa'];?></td>                      
                        <td><?php echo $data['Kelas'];?></td>                      
                        <td><?php echo $data['Tanggal_Mendaftar'];?></td>                      
                        <td><?php echo $data['TA'];?></td>                    
                        <!--td><?php// echo $data['No_Pendaftaran'];?></td-->                    
                        <td><?php echo $data['Tanggal_Diperbarui'];?></td>   

                         <td>
                            <a href="?page=kelas4&aksi=ubah&id=<?php echo $data['Nik_Siswa']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=kelas4&aksi=hapus&id=<?php echo $data['Nik_Siswa']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                            <a href="?page=kelas4&aksi=detail&id=<?php echo $data['Nik_Siswa']; ?>" class="btn btn-primary" ><i class="fa fa-eye"></i> detail</a>
                            <a href="?page=kelas4&aksi=rubah_tingkat1&id=<?php echo $data['Nik_Siswa']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah Tingkat</a>

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