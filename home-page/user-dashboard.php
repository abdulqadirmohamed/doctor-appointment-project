<?php 
//   session_start();
//   $conn = mysqli_connect('localhost','root','','doctor-appointment');
//     $sql = "SELECT * FROM patient";
    
//     $result = mysqli_query($conn, $sql);
//     $row = mysqli_fetch_array($result);
  
  
//       if($_SESSION['username']){
        
//       }
//       else{
//           session_unset();
//           session_destroy();
//           header('Location: ../home-page/index.php');
    //   }
      ?>

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
    <link rel="stylesheet" href="./Style/user-dash.css">
</head>
<body>
    <?php 
     include './include/header.php';
    
    ?>
    <div class="container">
     
        <div class="info-text d-flex justify-content-between my-5">
            <a  href="find-doctor.html" class="btn btn-primary"><i class="fa fa-user"></i> Find Doctor</a>
            <a class="btn btn-danger"><i class="fa fa-calendar"></i> View Appointment</a>
            <a href="profile-petient.php" class="btn btn-warning">
                <i class="fa fa-image"></i> 
                Profile
            </a>
         </div>
    </div>
    <!-- Sections -->
    <div class="cards-section">
        <div class="container card-items">
            <div class="card">
                <img src="../Images/doctor.png" alt="">
                <a class="btn btn-primary">Call Doctor</a>
            </div>
            <div class="card">
                <img src="../Images/blood.png" alt="">
                <a class="btn btn-primary">Blood Donor</a>
            </div>
            <div class="card">
                <img src="../Images/ambulance.png" alt="">
                <a href="./Ambulance.html" class="btn btn-primary">Umbulance</a>
            </div>
            <div class="card">
                <img src="../Images/buy-medicine.png" alt="">
                <a class="btn btn-primary">Medical Purchase</a>
            </div>
        </div>
    </div>
    
</body>
</html>