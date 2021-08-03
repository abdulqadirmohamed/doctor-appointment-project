<?php  
    session_start();

    $conn = mysqli_connect('localhost','root','','registration');
    $sql = "SELECT * FROM Admin_user";
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);


      if($_SESSION['username']){
      
      }
      else{
          session_unset();
          session_destroy();
          header('Location: index.php');
      }                 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="./header/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
</head>
<body>
<header>
        <nav>
            <li>Home</li>
            <li>About</li>
            <li>Path</li>
        </nav>
        <div class="user">
            <h2><?php echo $_SESSION['username'] ?></h2>
            <div class="profile"></div>
        </div>
        <div class="logout">
            <form action="" method="post">
            <button name="logout" class="btn btn-success">Logout</button>
            </form>
        </div>
    </header>
    <?php 
        if(isset($_POST['logout'])){
            session_destroy();
            header('location:index.php');
        }
    
    ?>
</body>
</html>