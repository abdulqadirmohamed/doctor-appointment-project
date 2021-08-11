<?php 
	
//     session_start();
//   $conn = mysqli_connect('localhost','root','','doctor-appointment');
//     $sql = "SELECT * FROM Admin_user";
    
//     $result = mysqli_query($conn, $sql);
//     $row = mysqli_fetch_array($result);
  
  
//       if($_SESSION['username']){
      
//       }
//       else{
//           session_unset();
//           session_destroy();
//           header('Location: ../Auth/logout.php');
//       }       
    
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
<?php include './include/header.php'; ?>

    
    <?php
        $conn = mysqli_connect('localhost','root','','doctor-appointment');
        $currentUser = $_SESSION['username'];
      // $sql = "SELECT * FROM patient WHERE username = '$currentUser'";
        $sql = "SELECT * FROM Admin LEFT JOIN DOCTORS ON ADMIN.EMAIL = DOCTORS.EMAIL WHERE username = '$currentUser'";

        $result = mysqli_query($conn, $sql);
        
               
      ?>
      <div class="d-flex">
       <div class="sidebar">
        <div class="info-detials">
            <?php 
             if($result){
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result)){
                        // print_r($row);
            ?>
            <figure class="text-center">
                <img src="./image/hero.png" alt="">
            </figure>
            <div class="text-info bg-white border p-2">
                <h5 class=" text-primary "><?php echo $row['name'] ?></h5>
            </div>
            <div class="text-info d-flex jusfity-content-between border p-2">
                <label for="">Email: </label>
                <label for=""><?php echo $row['email'] ?></label>
            </div>
            <div class="text-info d-flex jusfity-content-between border p-2">
                <label for="">Cardiology: </label>
                <label for=""><?php echo $row['speciality'] ?></label>
            </div>
            <div class="text-info d-flex jusfity-content-between  border p-2">
                <label for="">Degree: </label>
                <label for=""><?php echo $row['degree'] ?></label>
            </div>
            <div class="text-info d-flex jusfity-content-between  border p-2">
                <label for="">Address: </label>
                <label for=""><?php echo $row['address'] ?></label>
            </div>
            <div class="text-info d-flex jusfity-content-between  border p-2">
                <label for="">Phone: </label>
                <label for=""><?php echo $row['phone'] ?></label>
            </div>
            <div class="text-center">
                <button class="btn btn-light my-3">Edit Profile</button>
            </div>
            <?php }}}?>
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
                        <th>Patient Email</th>
                        <th>Patient Phone</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php 
                 $sql = "SELECT * FROM patient";
                 $result = mysqli_query($conn, $sql);
                 if($result){
                     while($row = mysqli_fetch_array($result)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['fullname'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td>10:11 AM</td>
                        <td>
                            <button class="btn btn-success">Approve</button>
                            <button class="btn btn-danger">Appointment Cencel</button>
                        </td>
                    </tr>
                </tbody>
                <?php    }
                 }
                ?>
            </table>
        </div>
    </div>
  
    </div>  
</body>
</html>