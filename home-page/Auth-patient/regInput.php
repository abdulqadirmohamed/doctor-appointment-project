<?php 
   
   if (isset($_POST['submit'])) {
    $fullName = $_POST['fullname'];
    $username = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $blood = $_POST['blood'];
    // $bob = $_POST['bob'];
    $address = $_POST['address'];

    // check password is match or not
    if($password == $cpassword){
        $sql = "SELECT username, email FROM patient WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $msg = "<div class='btn btn-danger'>Username or Email is already exists.</div>";
        }else{
            $insertSql = "INSERT INTO patient (fullname, username, email, password, contact, gender,  blood, address)
                VALUES('$fullName','$username','$email','$password','$contact','$gender','$blood','$bob','$address','')";
            $insertResult = mysqli_query($conn, $insertSql);
            if($insertResult){
                $msg = "<div class='btn btn-success'>Your registration is completed. Now you can login.</div>";
                $_POST['fullname'] = "";
                $_POST['userName']  = "";
                $_POST['email'] = "";
                $_POST['password'] = "";
                $_POST['cpassword']  = "";
                $_POST['phone'] = "";
                $_POST['gender'] = "";
                $_POST['blood'] = "";
                $_POST['bob'] = "";

                $_POST['address'] = "";
            }else{
                $msg = "<div class='btn btn-danger'>Your registration is not completed. Please try again.</div>";

            }
        }
    }
}


?>