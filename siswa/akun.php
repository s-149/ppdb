
    <section class="special_cource padding_top" id="akun">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Akun Peserta Didik Baru</p>
                        <h2>AKUN</h2>
                    </div>
                </div>
            </div>   
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="course bg-white h-100 align-self-stretch">
                        <figure class="m-0">
                            <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i>
                                        <strong class="card-title pl-2">Akun </strong>
                                        <a href="gambar/user/<?=$akun['Fhoto']?>" alt="Fhoto"><i class="fas fa-eye"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="custom-tab">

                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home"
                                                     aria-selected="true">Profile</a>
                                                    <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile"
                                                     aria-selected="false">Ganti Password</a>
                                                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact"
                                                     aria-selected="false">Ganti Fhoto</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                                    <div class="card-body">
                                                        <div class="mx-auto d-block">
                                                            <img width="300px" class="rounded-circle mx-auto d-block" src="gambar/user/<?=$akun['Fhoto']?>" alt="Card image cap">
                                                             <h5 class="text-sm-center mt-2 mb-1"><?=$siswa['Nama_Lengkap'];?></h5>
                                                                <div class="location text-sm-center">Bergabung Pada, <?=$akun['Waktu'];?>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                                    <form action="" method="POST" enctype="multipart/form-data" >
                                                        <div class="form-group">
                                                            <label>Password Baru :</label>
                                                            <input class="form-control" type="text" name="pass" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="btn btn-primary" type="submit" name="ganti_password" value="Simpan" />
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                                    <form action="" method="POST" enctype="multipart/form-data" >
                                                        <div class="form-group">
                                                            <label>Ganti Foto</label>
                                                            <input class="form-control"  type="file" name="foto" id="foto" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="btn btn-primary" type="submit" name="ganti_fhoto" value="Simpan" />
                                                        </div>
                                                    </form>
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


 <?php 
 if (isset($_POST['ganti_password'])) {
    
    $pass = $_POST ['pass'];

       $sql = $koneksi->query("update  user set Password='$pass' where UserName='$user'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?akun=";

                </script>
<?php  } ?>

 <?php 
 if (isset($_POST['ganti_fhoto'])) {
    
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];

    $folder='gambar/user/';
    $gambar=date('d_M_Y_h_i_s').'_'.$foto;

    $simpan = $_POST ['simpan'];


       $sql = $koneksi->query("update  user set  Fhoto='$gambar' where UserName='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?akun=";

                </script>
<?php  } ?>
                             
                             

