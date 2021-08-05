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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

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
        <div class="row d-flex mx-3">
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
          <!-- charts -->
          <div class="d-flex justify-content-between mt-4" style="width: 50%">
            <hr>
              <canvas id="doughnut"  style="max-width:500px"></canvas>
              <canvas id="myChart" style="max-width:500px"></canvas>

          </div>
    <script>
        var xValues = ["Male", "Female"];
        var yValues = [55, 49];
        var barColors = [
        "#b91d47",
        "#00aba9"
        ];

        new Chart("doughnut", {
        type: "doughnut",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            title: {
            display: true,
            text: "Gender of Patient"
            }
        }
        });

        var xValues = [100,200,300,400,500,600,700,800,900,1000];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "green",
      fill: false
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
})
</script>

          <!-- end charts -->
            
        </div>
    </section>
</body>
</html>