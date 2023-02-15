
<?php
  error_reporting(0);
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


                        <?php

                            $page = $_GET['page'];
                            //$aksi = $_GET['aksi'];


                            if (!empty($page)) 
                              {
                                include "lupa_password/".$page.".php";
                              }
                            else 
                              {
                                include "lupa_password/index.php";
                              }
                        ?>
</body>

</html>
<!-- end document-->
