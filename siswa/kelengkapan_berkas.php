
    <section class="learning_part" id="daftar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Penerimaan Peserta Didik Baru</p>
                        <h2>PPDB</h2>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="course bg-white h-100 align-self-stretch">
                        <figure class="m-0">
                            <div class="card">
                                <div class="card">
                                    <?php
    
    $id=$user;
    $sql = $koneksi->query("select * from siswa where Nik_Siswa='$user'");
    $data = $sql->fetch_assoc();
    $sql1 = $koneksi->query("select * from orang_tua_siswa where Nik_Siswa='$user'");
    $orang_tua_siswa = $sql1->fetch_assoc();
    $sql2 = $koneksi->query("select * from asal_mula_siswa where Nik_Siswa='$user'");
    $asal_mula_siswa = $sql2->fetch_assoc();
    //$sql3 = $koneksi->query("select * from kelengkapan_data where Nik_Siswa='$_GET[id]'");
    //$kelengkapan_data = $sql3->fetch_assoc();
    $sql4 = $koneksi->query("select * from user where UserName='$user'");
    $akun = $sql4->fetch_assoc();

?>

<div class="panel panel-default">
<div class="panel-heading">
        Formulir PPDB
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
                <div class="table-responsive">
                    <table class="table">
            <h4>Kelengkapan Berkas:</h4>
                <div class="table-responsive">
                    <div>
                        <a href="?tambah_kelengkapan_berkas=&id=<?=$user ?>" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Berkas</a>
                    </div><br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $no = 1;

                        $sql3 = $koneksi->query("select * from kelengkapan_data where Nik_Siswa='$user'");

                        while ($kelengkapan_data= $sql3->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><a href="gambar/kelengkapan_data/<?php echo  $kelengkapan_data['Fhoto'];?>"> <img src="gambar/kelengkapan_data/<?php echo  $kelengkapan_data['Fhoto'];?>" width="75" height="50"></a> </td>

                         <td>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?hapus_kelengkapan_berkas=&id=<?php echo $kelengkapan_data['id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

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
                            </div>
                        </figure>
                    </div>
                </div>
            </div> 

        </div>
    </section>