
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>finder-doctor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    
    <link rel="stylesheet" href="./Style/find-doctor.css">
</head>
<style>
    th,td{
        font-size: 20px
    }
</style>
<body>
    <?php 
     include './include/header.php';
    ?>
    <!-- body section -->
    <div class="container">
        <section>
            <div class="info-picker ">
                <form action="" class="form-group my-2 d-flex justify-content-around align-items-center">
                    <div class="find">
                        <select name="" id="" class="form-control my-2">
                            <option selected disabled>Select</option>
                            <option value="" class="form-control">Dhamandi</option>
                            <option value="">Azimbut</option>
                        </select>
                    </div>
                    <div class="search-btn">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </div>
            <!-- end information picker -->
            <div class="scrollme">
            <table class="table bg-white border ">
                <thead class="shadow-sm bg-primary text-white">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Degree</th>
                        <th>Department</th>
                        <th>Action</th>
                </thead>
                <?php

                $sql = "SELECT * FROM Admin LEFT JOIN DOCTORS ON ADMIN.EMAIL = DOCTORS.EMAIL";
                $result = mysqli_query($conn, $sql);
                if($result){
                    while($row = mysqli_fetch_array($result)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td><?php echo $row['degree'] ?></td>
                        <td><?php echo $row['speciality'] ?></td>
                       <td>
                          <!-- Model -->
                          <!-- Button trigger modal -->
                    <a type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                        Take Appointment
                    </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['name'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
                          <!-- end Model -->
                       </td>
                    </tr>
                </tbody>
                <?php }}?>
            </table>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>