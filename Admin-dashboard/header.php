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
    <title>header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style/index.css">
</head>
<body>
<header>
        <div class="container navigation">
            <nav>
                <div class="logo">
                    <h2>Medicate</h2>
                </div>
                <div class="navbar">
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Dashboard</a>
                </div>
            </nav>
            <div class="auth">
                <a href="#"><?php echo $_SESSION['username'] ?></a>
                <a href="../Auth\logout.php">logout</a>
            </div>
        </div>
    </header>
</body>
</html>