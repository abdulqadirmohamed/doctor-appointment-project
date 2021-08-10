<?php 
 include './db/conn.php';
 if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $phone = $_POST['phone'];
     $address = $_POST['address'];
     $dob = $_POST['dob'];
     $degree = $_POST['degree'];
     $Speciality = $_POST['speciality'];

     $sql = "INSERT INTO doctor (name, email, password, phone, address, dob, degree, Speciality)
            VALUES('$name', '$email', '$password','$phone', '$address','$dob', '$degree', '$Speciality')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location: doctor-list.php');
    }
 }



?>