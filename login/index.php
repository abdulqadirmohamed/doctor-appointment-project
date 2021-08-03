<?php 
    session_start();
    $conn = mysqli_connect('localhost','root','','registration');

    $msg = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM Admin_user WHERE username= '$username' AND password='$password' ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        
        if($row['role'] == 'admin')
        {
            $_SESSION['username'] = $username;
            // header('location:admin.php');
            header("Location: ../index.php");
        }
        elseif($row['role'] == 'user')
        {
            $_SESSION['username'] = $username; 
            header("Location: ../Normal-user/index.php");
        }else{
            $msg = '<div class="alert alert-danger">Username or Password incorrect</div>';
        }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTNB Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
    <style>
    .card{
        width: 500px;
        height
        margin: auto
    }
    body{
         background-color: #F7F7F7 !important;
    }
    </style>
</head>
<body>

    <div class="card mt-5 shadow-sm">
            <!-- <h2 class="card-header text-center bg-primary text-white">Login</h2> -->
            <div class="card-body mt-5">
            <form action="" method="POST">
                    <?php echo $msg; ?>
                    <!-- <h2>Login Here</h2> -->
                    <div class="input-group mb-3">
                         <input type="text" class="form-control " placeholder="Enter Username" 
                         name="username" required autocomplete="off">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password"
                         required autocomplete="off">
                    </div>
                    <div class="input-group">
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>