<?php
  session_start();
  $conn = mysqli_connect('localhost','root','','doctor-appointment');
    $sql = "SELECT * FROM patient";
     if(!$_SESSION['username']){
        session_unset();
          session_destroy();
          header('Location: ../home-page/index.php');
    }else{?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Style/user-dash.css">
</head>
<body>
<header>
        <div class="container navigation">
            <nav>
                <div class="logo">
                    <a href="#">Home</a>
                </div>
                <div class="navbar">
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                </div>
            </nav>
            <div class="auth">
                <a href="#" class="text-capitalize"><?php echo $_SESSION['username'] ?></a>
                <!-- C:\xampp\htdocs\Doctor-appointment\home-page\Auth-patient\logout.php -->
                <a href="../Auth/logout.php">Logout</a>
            </div>
        </div>
    </header>
    <?php   }


?>