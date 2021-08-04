<?php include './db/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style/dashboard.css">

</head>
<body>
    <header>
        <div class="container navigation">
            <nav>
                <div class="logo">
                    <h2>Medicate</h2>
                </div>
                <div class="navbar">
                  
                </div>
            </nav>
            <div class="auth">
                <a href="#" class="capitalize">Admin</a>
                <a href="../Auth\logout.php">logout</a>
            </div>
        </div>
    </header>
    <!-- Side bar -->
    <div class="side-bar">
        <div class="content">
            <ul>
                <li> 
                    <i class="bi bi-speedometer text-white" style="font-size: 35px; margin-right: 5px"></i> 
                    <a href="#">Dashboard</a>
                </li>
                <li> 
                    <i class="bi bi-person-lines-fill text-white" style="font-size: 35px; margin-right: 5px"></i> 
                    <a href="./doctor-list.php">Doctor</a>
                </li>
                <li> 
                    <i class="bi bi-people-fill text-white" style="font-size: 35px; margin-right: 5px"></i> 
                    <a href="./patient.php">Patient</a></li>
                </li>
                <li> 
                    <i class="bi bi-calendar-check-fill text-white" style="font-size: 35px; margin-right: 5px"></i> 
                    <a href="./patient.php">Doctor Schedule</a></li>
                </li>
                <li> 
                    <i class="bi bi-cloud-plus-fill text-white" style="font-size: 35px; margin-right: 5px"></i> 
                    <a href="./patient.php">Appointment</a></li>
                </li>
                <li> 
                    <i class="bi bi-images text-white" style="font-size: 35px; margin-right: 5px"></i> 
                    <a href="./patient.php">Profile</a></li>
                </li>
            </ul>
        </div>
    </div>
    <!-- content cards -->
    <section class="">
        <div class="row d-flex">
            <div class="card col-md-4 text-white d-flex mx-3">
                <div class="card-header">
                     <h2>Total Doctors</h2>
                     <p>Dakhatiirka List-ka ku jirta</p>
                </div>
                <div class="card-content mt-3 d-flex justify-content-between">
                    <?php 
                       $sql = "SELECT * FROM doctor";
                       $result = mysqli_query($conn, $sql);
                       $row = mysqli_num_rows($result);
                    
                    ?>
                    <div>
                       
                        <h1><?php echo $row?></h1>
                    </div>
                    <div class="icons">
                    <i class="bi bi-images text-white" style="font-size: 45px"></i> 
                    </div>
                </div>
            </div>
            <!-- en card -->
            <div class="card col-md-4 text-white d-flex mx-3 bg-warning">
                <div class="card-header">
                     <h2>Total Patient</h2>
                     <p>Bukaanka List-ka ku jirta</p>
                </div>
                <div class="card-content mt-3 d-flex justify-content-between">
                    <?php 
                       $sql = "SELECT * FROM patient";
                       $result = mysqli_query($conn, $sql);
                       $row = mysqli_num_rows($result);
                    
                    ?>
                    <div>
                       
                        <h1><?php echo $row?></h1>
                    </div>
                    <div class="icons">
                    <i class="bi bi-people-fill text-white" style="font-size: 45px"></i> 
                    </div>
                </div>
            </div>
            <!-- en card -->
            <!-- en card -->
            <div class="card col-md-4 text-white d-flex mx-3 bg-danger">
                <div class="card-header">
                     <h3>Total Today Appointment</h3>
                     <p>Bukaanka List-ka ku jirta</p>
                </div>
                <div class="card-content mt-3 d-flex justify-content-between">
                    <?php 
                       $sql = "SELECT * FROM patient";
                       $result = mysqli_query($conn, $sql);
                       $row = mysqli_num_rows($result);
                    
                    ?>
                    <div>
                       
                        <h1><?php echo $row?></h1>
                    </div>
                    <div class="icons">
                    <i class="bi bi-people-fill text-white" style="font-size: 45px"></i> 
                    </div>
                </div>
            </div>
            <!-- en card -->
          
            
        </div>
    </section>
</body>
</html>