<?php 
	
    session_start();
  $conn = mysqli_connect('localhost','root','','doctor-appointment');
    $sql = "SELECT * FROM Admin_user";
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
  
  
      if($_SESSION['username']){
      
      }
      else{
          session_unset();
          session_destroy();
          header('Location: ../Auth/logout.php');
      }       
    
    // $_SESSION['id']; 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor-Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
        <div class="container navigation">
            <nav>
                <div class="logo">
                    <a href="#">Medice</a>
                </div>
                <div class="navbar">
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                </div>
            </nav>
            <div class="auth">
                <a href="#"><?php echo $_SESSION['username'] ?></a>
                <a href="../Auth/logout.php">Logout</a>
            </div>
        </div>
    </header>
    <div class="d-flex">
    <div class="sidebar">
        <div class="info-detials">
            <figure class="text-center">
                <img src="./image/hero.png" alt="">
            </figure>
            <div class="text-info bg-white border p-2">
                <h5 class=" text-primary ">Abdulqadir Mohamed</h5>
            </div>
            <div class="text-info d-flex jusfity-content-between border p-2">
                <label for="">Cardiology: </label>
                <label for="">Children</label>
            </div>
            <div class="text-info d-flex jusfity-content-between  border p-2">
                <label for="">Gender: </label>
                <label for="">Male</label>
            </div>
            <div class="text-info d-flex jusfity-content-between  border p-2">
                <label for="">Address: </label>
                <label for="">Halgan 0047</label>
            </div>
            <div class="text-info d-flex jusfity-content-between  border p-2">
                <label for="">Phone: </label>
                <label for="">123456789</label>
            </div>
            <div class="text-center">
                <button class="btn btn-light my-3">Edit Profile</button>
            </div>
        </div>
        <!-- content -->
    </div>
    <div class="container">
        <div class="content-doctor">
            <h2 class="text-center mt-2 text-primary">Appointment List</h2>
            <hr>
            <table class="table" style="width: 90%; margin: auto">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Patient Name</th>
                        <th>Patient Phone</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ahmed Ali</td>
                        <td>123 456 789</td>
                        <td>02/08/2021 10:00PM</td>
                        <td>
                            <button class="btn btn-success">Approve</button>
                            <button class="btn btn-danger">Appointment Cencel</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Mohamed Farah</td>
                        <td>123 456 789</td>
                        <td>02/08/2021 11:00PM</td>
                        <td>
                            <button class="btn btn-success">Approve</button>
                            <button class="btn btn-danger">Appointment Cencel</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Fatima Ahmed</td>
                        <td>123 456 789</td>
                        <td>02/08/2021 12:00PM</td>
                        <td>
                            <button class="btn btn-success">Approve</button>
                            <button class="btn btn-danger">Appointment Cencel</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>
</html>