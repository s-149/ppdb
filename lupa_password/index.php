
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <label>Silahkan Isi Username :</label>

                
                        <?php
                
                    if(isset($_POST['login']))
                        {
                        $UserName=$_POST['UserName'];
                        $query = mysqli_query($koneksi, "SELECT * FROM `user` WHERE `UserName`='$UserName' ");
    
                        if(mysqli_num_rows($query) == 1)
                            {
                                echo " 
                                        <script>
                                             window.location.href='lupa_password.php?page=t&i=$UserName'; 
                                        </script>";
                            }
                        else
                            {
                                echo " 
                                        <script>
                                            alert('Upzz,,, UserName belum terdaftar'); 
                                            window:location='lupa_password.php' 
                                        </script>";
                    
                               
                            }
                    
                }

                ?>
                        <div class="login-form">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="text" name="UserName" placeholder="User Name" required autofocus>
                                </div>
                                <button class="au-btn au-btn--green m-b-20" type="submit" name="login">KIRIM</button>
                            </form>
                        </div>
                        <br>
                                <span>Tidak jadi?, <a href="login.php">Kembali.</a> </span>
                    </div>
                </div>
            </div>
        </div>
    <br><br>    