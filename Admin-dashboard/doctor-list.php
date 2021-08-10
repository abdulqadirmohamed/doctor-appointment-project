<?php 
    include './db/conn.php';
    $sql = "SELECT * FROM doctor";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors-list</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style/find-doctor.css">
</head>
<body>
    <header>
        <div class="container navigation">
            <nav>
                <div class="logo">
                    <a href="../Admin-dashboard/dashboard.php">Dashboard > Doctor</a>
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
            <div class="info-picker d-flex justify-content-between align-items-center">
                <form action="" class="form-group my-2 d-flex justify-content-around align-items-center">
                    <div class="search-btn">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
                <div>
                   <!-- Model/Popup -->
                   <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                   Add New
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registration New Doctor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <form action="doctor-form.php" method="post" class="form-group">
                           <input type="text" class="form-control my-2" name="name" placeholder="Doctor Name" autocomplete="off">
                           <input type="text" class="form-control my-2" name="email" placeholder="Email"  autocomplete="off">
                           <input type="text" class="form-control my-2" name="password" placeholder="Password"  autocomplete="off">
                           <input type="text" class="form-control my-2" name="phone" placeholder="Phone"  autocomplete="off">
                           <input type="text" class="form-control my-2" name="address" placeholder="Address"  autocomplete="off">
                           <input type="date" class="form-control my-2" name="don" placeholder="Birthday"  autocomplete="off">
                           <input type="text" class="form-control my-2" name="degree" placeholder="Degree"  autocomplete="off">
                           <input type="text" class="form-control my-2" name="speciality" placeholder="Speciality"  autocomplete="off">

                      
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    </div> 
                </form>
                    </div>
                </div>
                </div>
                   <!-- End Model/Popup -->
                </div>
            </div>
            <!-- end information picker -->
            <div class="scrollme">
            <table class="table bg-white border shadow">
                <thead class="shadow-sm">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>password</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>DOB</th>
                        <th>Degree</th>
                        <th>Speciality</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){

                    ?>
                    <tr>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['password']?></td>
                        <td><?php echo $row['phone']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['dob']?></td>
                        <td><?php echo $row['degree']?></td>
                        <td><?php echo $row['Speciality']?></td>
                        <td>
                            <form action="delete-doctor.php" method="get">
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
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>