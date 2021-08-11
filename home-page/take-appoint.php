<?php $conn = mysqli_connect('localhost','root','','doctor-appointment');
if(isset($_GET['id'])){
    $id = $_GET['username'];

    $sql = "SELECT * FROM Admin LEFT JOIN DOCTORS ON ADMIN.EMAIL = DOCTORS.EMAIL WHERE username = $id";
    $result = mysqli_query($conn, $sql);
    $fetch = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take_Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style/find-doctor.css">
</head>
<style>
    form,
    .alert{
        width: 600px;
        margin: auto;
    }
    label:nth-child(2){
        font-weight: 700;
    }
    .info > input{
        width: 300px;
    }
</style>
<body>
    <header>
        <div class="container navigation">
            <nav>
                <div class="logo">
                    <a href="user-dashboard.php">Medicate</a>
                </div>
                <div class="navbar">
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                </div>
            </nav>
            <div class="auth">
                <a href="#">Dashboard</a>
                <a href="./login.html">Login</a>
            </div>
        </div>
    </header>
    <!-- body section -->
    <div class="container">
        <section>
            <div class="title">
                <h5 class="alert alert-primary my-2">Take Appointment</h5>
            </div>
            <?php if($fetch): ?>
            <form action="" class="form-group">
                <div class="card shadow-sm my-2">
                    <div class="card-header bg-primary text-white">
                        <h3 ><?php echo $fetch['name']?></h3>
                    </div>
                    <div class="card-body shadow-sm">
                        <div class="info my-2">
                            <label for="">Phone : </label>
                            <label for="">+252907592523</label>
                        </div>
                        <div class="info my-2">
                            <label for="">Department : </label>
                            <label for="">Children</label>
                        </div>
                        <div class="info my-2">
                            <label for="">Gender : </label>
                            <label for="">Male</label>
                        </div>
                        <div class="info my-2">
                            <label for="">Area : </label>
                            <label for="">Garowse</label>
                        </div>
                        <div class="info my-2">
                            <label for="">Email : </label>
                            <label for="">test@test.co.so</label>
                        </div>
                        <div class="info my-2">
                            <label class="text-primary">Select Schedule</label>
                            <input type="datetime-local" class="form-control">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary my-2">Submit</button>
            </form>
            <?php else:?>
        <?php endif;?>
        </section>
    </div>
    
</body>
</html>