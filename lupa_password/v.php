<?php
    
    $i=$_GET['i'];

?>

    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <label>Silahkan Isi Password Baru :</label>

                        <div class="login-form">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="Password" name="pass" placeholder="User Name" required autofocus>
                                </div>
                                <button class="au-btn au-btn--green m-b-20" type="submit" name="simpan1">SIMPAN</button>
                            </form>
                        </div>
                        <br>
                                <span>Tidak jadi?, <a href="login.php">Kembali.</a> </span>
                    </div>
                </div>
            </div>
        </div>
    <br><br>    


 <?php if (isset($_POST['simpan1'])) {
    
    $pass = $_POST ['pass'];
        $sql = $koneksi->query("update  user set Password='$pass' where UserName='$i'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Password Berhasil Diperbaharui");
                    window.location.href="login.php";

                </script>

 
            <?php } ?>
       