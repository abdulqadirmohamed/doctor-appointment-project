<?php 
    include './db/conn.php';
    $sql = "SELECT * FROM patient";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style/find-doctor.css">
</head>
<body>
    <header>
        <div class="container navigation">
            <nav>
                <div class="logo">
                    <a href="../Admin-dashboard/dashboard.php">Dashboard > Patient</a>
                </div>
            </nav>
            <div class="auth">
                <a href="#">Admin</a>
                <a href="#login.html">Login</a>
            </div>
        </div>
    </header>
    <!-- body section -->
    <div class="container">
        <section>
            <div class="info-picker ">
                <form action="" class="form-group my-2 d-flex justify-content-around align-items-center">
                    <div class="search-btn">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                   
                </form>
            </div>
            <!-- end information picker -->
            <div class="scrollme">
            <table class="table bg-white border ">
                <thead class="shadow-sm">
                    <tr>
                        <th>Patient Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>password</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>Blood_Group</th>
                        <th>Blood_Group</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){

                    ?>
                    <tr>
                        <td><?php echo $row['fullname']?></td>
                        <td><?php echo $row['contact']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['password']?></td>
                        <td><?php echo $row['gender']?></td>
                        <td><?php echo $row['status']?></td>
                        <td><?php echo $row['blood']?></td>
                        <td>
                            <form action="delete-patient.php" method="get">
                                <input type="hidden" name="id_delete" value="<?php echo $row['id'];?>">
                                <input type="submit" class="btn btn-danger" name="id" value="Remove">
                            </form>
                        </td>
                       
                    </tr>
                    <?php    }
                        }?>
                </tbody>
            </table>
            </div>
        </section>
    </div>
    
</body>
</html>