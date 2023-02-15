
<?php
    include "koneksi.php";
    include "variabel.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="<?=$author?>" >
    <meta name="keyword" content="<?=$keyword?>">

    <title><?=$title?></title>

    <!-- Icon -->
    <link rel="icon" href="<?=$icon?>">
    <link rel="shortcut icon" href="<?=$icon?>" type="image/x-icon">
    

    <!-- Bootstrap CSS-->
    <link href="assets/login/bootstrap.min.css" rel="stylesheet" media="all">
  
    <!-- Main CSS-->
    <link href="assets/login/theme.css" rel="stylesheet" media="all">
    <style>
        body {
            
            background-color:#eee;
            }
    </style>

</head>
<body>
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <img width="200px" src="<?=$icon?>">
                </div>
                <center>
                    <h4>PPDB MIS Kompa</h4>
                    <h3>Silahkan Login</h3>
                </center><br>
                
                        <?php
                
                    if(isset($_POST['login']))
                        {
                        $UserName=$_POST['UserName'];
                        $Password=$_POST['Password'];
                        $query = mysqli_query($koneksi, "SELECT * FROM `user` WHERE `UserName`='$UserName' AND `Password`='$Password'  AND `akses`='aktif' ");
    
                        if(mysqli_num_rows($query) == 0)
                            {
                                echo " 
                                        <script>
                                            alert('Upzz,,, Login Gagal, silahkan ulangi kembali'); 
                                            window:location='login.php' 
                                        </script>";
                            }
                        else
                            {
                    
                                $row = mysqli_fetch_assoc($query);
                                    session_start();
                                        if($row['Level'] == 'admin' )
                                            {
                                                $_SESSION['user']=$UserName;
                                                $_SESSION['password']=$Password;
                                                $_SESSION['level'] = 'admin' ;
                                                header("Location: admin.php");
                                            }
                                        if($row['Level'] == 'admin1' )
                                            {
                                                $_SESSION['user']=$UserName;
                                                $_SESSION['password']=$Password;
                                                $_SESSION['level'] = 'admin1' ;
                                                header("Location: admin1.php");
                                            }
                                        if($row['Level'] == 'pengajar' )
                                            {
                                                $_SESSION['user']=$UserName;
                                                $_SESSION['password']=$Password;
                                                $_SESSION['level'] = 'pengajar' ;
                                                header("Location: pengajar.php");
                                            }

                                        if($row['Level'] == 'siswa' )
                                            {
                                                $_SESSION['user']=$UserName;
                                                $_SESSION['password']=$Password;
                                                $_SESSION['level'] = 'siswa' ;
                                                header("Location: siswa.php?pendaftar=");
                                            }

                                        if($row['Level'] == 'user' )
                                            {
                                                $_SESSION['user']=$UserName;
                                                $_SESSION['password']=$Password;
                                                $_SESSION['level'] = 'user' ;
                                                header("Location: index.php");
                                            }
                        
                                        else
                                            {
                                        echo " 
                                        <script>
                                            alert('Upzz,,, Login Gagal, silahkan ulangi kembali'); 
                                            window:location='login.php' 
                                        </script>";
                                            }
                        }
                    
                }

                ?>
                        <div class="login-form">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="text" name="UserName" placeholder="User Name" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="password" name="Password" placeholder="Password" required autofocus>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="login">MASUK</button>
                            </form>
                        </div>
                        <br>
                                <span>Belum memiliki akun?, <a href="index.php">Kembali.</a> </span>
                        <br>
                                <span>Lupa Password?, <a href="lupa_password.php">Lupa Password.</a> </span>
                    </div>
                </div>
            </div>
        </div>
    <br><br>    
</body>

</html>
<!-- end document-->
