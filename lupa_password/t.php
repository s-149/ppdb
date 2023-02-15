<?php
    
    $i=$_GET['i'];

?>

    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <label>Silahkan Isi Tgl Lahir :</label>

                
                        <?php
                
                    if(isset($_POST['login']))
                        {
                        $tanggal_lahir=$_POST['tanggal_lahir'];
                        $query = mysqli_query($koneksi, "SELECT * FROM `user` WHERE `UserName`='$i' and `Password`='$tanggal_lahir' ");

                        $siswa = mysqli_query($koneksi, "SELECT * FROM `siswa` WHERE `Nik_Siswa`='$i' and `Tanggal_Lahir`='$tanggal_lahir' ");

                        $pengajar = mysqli_query($koneksi, "SELECT * FROM `siswa` WHERE `Nik_Pengajar`='$i' and `Tanggal_Lahir`='$tanggal_lahir' ");
    
                        if(mysqli_num_rows($query) == 1)
                            {

                                
                                echo " 
                                        <script>
                                             window.location.href='lupa_password.php?page=v&i=$i&t=$tanggal_lahir'; 
                                        </script>";
                            }
                        else
                            {
                                if (mysqli_num_rows($siswa) == 1) 
                                    {
                                        echo " 
                                                <script>
                                                    window.location.href='lupa_password.php?page=v&i=$i&t=$tanggal_lahir'; 
                                                </script>";
                                    }

                                elseif (mysqli_num_rows($pengajar) == 1) 
                                    {
                                        echo " 
                                                <script>
                                                    window.location.href='lupa_password.php?page=v&i=$i&t=$tanggal_lahir'; 
                                                </script>";
                                    }
                                else
                                    {
                                        echo " 
                                                <script>
                                                    alert('Upzz,,, Proses Terhenti, silahkan ulangi kembali'); 
                                                     window:location='lupa_password.php' 
                                                </script>";
                                    }

                               
                            }
                    
                }

                ?>
                        <div class="login-form">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="date" name="tanggal_lahir" placeholder="User Name" required autofocus>
                                </div>
                                <button class="au-btn au-btn--green m-b-20" type="submit" name="login">PROSES</button>
                            </form>
                        </div>
                        <br>
                                <span>Tidak jadi?, <a href="login.php">Kembali.</a> </span>
                    </div>
                </div>
            </div>
        </div>
    <br><br>    

