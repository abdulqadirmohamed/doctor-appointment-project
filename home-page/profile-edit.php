<?php
    $conn = mysqli_connect('localhost','root','','doctor-appointment');
    
    $id = $_POST['id_update'];
   
    $sql = "SELECT * FROM patient WHERE id= $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        while($row = mysqli_fetch_array($result)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="./Style/user-dash.css">

<style>
    body {
    background: #654ea3;
    background: linear-gradient(to right, #254EEB, #8aa2ff);
    min-height: 100vh;
    overflow-x: hidden
}
.profile > img{
    width: 130px;
    height: 130px;
}
</style>
<body class="">
<?php include './include/header.php'; ?>
    <div class="container bg-white shadow-lg mt-0 rounded" style="width: 600px; min-height: 400px; padding: 5px;">
        <form action="" class="form-group" enctype="multipart/form-data">
        <input type="hidden" name="id_update" value="<?php echo $row['id'];?>">

            <div class="card-title">
                <p class="ml-4">Update your profile</p class="ml-4">

            </div>
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3 d-flex">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAM1BMVEXk5ueutLeqsbTn6eqpr7PJzc/j5ebf4eLZ3N2wtrnBxsjN0NLGysy6v8HT1tissra8wMNxTKO9AAAFDklEQVR4nO2d3XqDIAxAlfivoO//tEOZWzvbVTEpic252W3PF0gAIcsyRVEURVEURVEURVEURVEURVEURVEURVEURVEURflgAFL/AirAqzXO9R7XNBVcy9TbuMHmxjN6lr92cNVVLKEurVfK/zCORVvW8iUBnC02dj+Wpu0z0Y6QlaN5phcwZqjkOkK5HZyPAjkIjSO4fIdfcOwFKkJlX4zPu7Ha1tIcwR3wWxyFhRG6g4Je0YpSPDJCV8a2Sv2zd1O1x/2WMDZCwljH+clRrHfWCLGK8REMiql//2si5+DKWKcWeAGcFMzzNrXC/0TUwQ2s6+LhlcwjTMlYsUIQzPOCb7YBiyHopyLXIEKPEkI/TgeuiidK/R9FniUDOjRDpvm0RhqjMyyXNjDhCfIMYl1gGjIMIuYsnGEYRMRZOMMunaLVwpWRW008v6fYKDIzxCwVAeNSO90BJW6emelYBRF/kHpYGVaoxTDAaxOFsfP9y8hpJ4xd7gOcij7JNGQ1EYFgkPJa1jQEiYZXRaRINKxSDUW9n+FT82lSKadkiru9/4XPqSLWOekGPoY05TAvLm9orm+YWuwHoBHkZKijNBJGmeb61eL6Ff/6q7bLr7yvv3vKGhpDRjvgjGaPz+gUg6YgcvpyAR2FIZ9U6nEEyZRTovmEU32KichpGn7C17XrfyH9gK/c0CMP05HZIM2uf9sEveizKveBy9/6Qt7o89ne33D525cfcIMW6ab+TMEukQbQbu+xu7X3A9bChmWaCeAkG17bpntwXgWxHaMzGPmUaR5dQZiKqRVeUZ3047fi3nAu28h4CHxCsZAgmEH8Y27jJAhm8c+5RQzRQNVGhVFSfxOYIjp/pP7RxzjevYXVGf4eLt+BJ1vCuLuLkrgABgCGXZ2wik5uty+oBvNirI6mkzhAf4Gsb58Hcm67Jzd+KwD10BYPLL3e0MjvKrgAULnOfveF/O4N2Xb9BZom3gJes3F9X5Zze8/6Yt09b4CrqsEjUv8oFBaR2rl+6CZr2xVrp24o/WitBKuGrrpl1+bFkmK2qXTON4VpbdfLa7o7y/WdLxG7lm2Lqh2clOwTegbvc/vj2U78CwhA87Bn8G5Nk3eOb0Nsr9flz3sG78UUtue4kpv1xvjg3TMay62BMlTlP+vrOMnJsRmt/ze0jsfkPPYdAH57hK+34PeOyc8XIXu5xT2HsUkdZz+adwg8HGFfQ3K5jtDvbUiO4Di9/ywHGrL88pDizZ++oTp+an+SMX/ndymUCwmHMdO7yuOx83pUx/eEMU0AvxWndwgidAqOZ8ypCwdEfvvEo6D9HwpA8wzvmOJEqAg9ySu8g4x0Hb9hSB/BANEKJ+LbPBU0lzbAJs4xt1AoshKkUGQmiH8/jJ0gdhTTLmSegHlPE0oOdXALnqDjKYh3px//fSgSWG8UqfrrIICzYYSJXRr9BSPbpNzw7gBjKjKOYI7ReIGqQRIap5+5MdjyvuDkExvGeXSlONWZAP3/AZBwJohU7QJRGU+cTVH18ELmRPNBmibW6MT/k1b0XhdkRBvyT6SB6EYv/GvhSmRNpGngRULsAlxMCGNXp7w3FfdEbTEEDdLI9TdIKRUzUesa3I461ER8cpNT7gMRhpKmYVS9ELOgCUQsa4SsulciKiLbY+AnHD8cpuhISsnxpamI84sbDq9qYJgf8wiiOBrC7Ml7M7ZECCqKoiiKoiiKoiiKoijv5AvJxlZRyNWWLwAAAABJRU5ErkJggg=="
                         alt="..." width="130" class="rounded mb-2 img-thumbnail" id="blah" src="#" alt="your image">
                         
                         <div class="col-md-12 my-2">
                         <label for="">Profile Image</label>
                            <input type="file"  accept="image/*" name="image"  id="imgInp"  class="form-control" 
                            style="width: 350px" autocomplete="off" value="<?php echo $row['username']?>">
                         </div>
                         
                    </div>
                  
                </div>
            <div class="col-md-12 my-2">
                <label for="">Full Name</label>
                <input type="text" class="form-control" autocomplete="off" required 
                value="<?php echo $row['fullname']?>">
            </div>
            <div class="col-md-12 my-2">
                <label for="">Address</label>
                <input type="text" class="form-control" autocomplete="off" 
                value="<?php echo $row['address']?>" required>
            </div>
            
            <div class="col-md-12 my-2">
                <label for="">Blood Group</label>
                <select name="" id="" class="form-select form-control "  value="<?php echo $row['blood']?>">
                    <!-- A+, A-,  B+, B-,  O+, O-,  AB+, AB- -->
                    <option value="">A+</option>
                    <option value="">A-</option>
                    <option value="">B+</option>
                    <option value="">B-</option>
                    <option value="">O+</option>
                    <option value="">0-</option>
                    <option value="">AB+</option>
                    <option value="">AB-</option>
                </select>
            </div>
            <div class="col-md-12 my-2">
                <label for="">Gender</label>
                <select name="" id="" class="form-select form-control"  value="<?php echo $row['gender']?>">
                    <option value="">Male</option>
                    <option value="">Female</option>
                </select>
            </div>
            <div class="col-md-12 my-2">
                <label for="">Reletionship Status</label>
                <select name="" id="" class="form-select form-control"  value="<?php echo $row['status']?>">
                    <option value="">Single</option>
                    <option value="">Marriage</option>
                </select>
            </div>
            <button class="btn btn-primary ml-3" name="submit">Save</button>
            <a href="profile-petient.php" class="btn btn-outline-danger ml-3">Cencal</a>
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];

        $file = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];

        $gender = $_POST['gender'];
        $bob = $_POST['bob'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $status = $_POST['status'];

        $sql = "UPDATE patient SET 
                fullname='$fullname',
                photo='$file',
                gender='$gender',
                bob='$bob',
                gender='$gender',
                address='$address',
                status='$status'

                WHERE id=$id";
        $query = mysqli_query($conn, $sql);
        if($query){      
            move_uploaded_file($fileTmpName, "images/".$file);
            header('Location: profile-petient.php');

            }else{
                echo 'Update error!!'.mysqli_error($conn);
            }
        }
    }}

    ?> 

    <script>
        imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>