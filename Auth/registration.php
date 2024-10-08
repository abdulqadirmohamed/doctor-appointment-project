<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <div class="container navigation">
            <nav>
                <div class="logo">
                    <a href="../Admin-dashboard/index.html">Medice</a>
                </div>
                <div class="navbar">
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                </div>
            </nav>
            <div class="auth">
                <a href="./index.php">Login</a>
                <a href="#">Registration</a>
            </div>
        </div>
    </header>

    <div class="container">
       <form action="" class="form-group bg-light shadow-lg rounded-lg p-5 my-5">
           <div class="title">
               <h2>Sign Up</h2>
           </div>
           <div class="input-groups mt-3">
               <label for="">Full Name</label>
               <input type="text" class="form-control my-2 p-2" autocomplete="off">
           </div>
           <div class="input-groups mt-3">
               <label for="">Email</label>
               <input type="text" class="form-control my-2 p-2" autocomplete="off">
           </div>
           <div class="input-groups mt-3">
               <label for="">Phone Number</label>
               <input type="text" class="form-control my-2 p-2" autocomplete="off">
           </div>
           <div class="input-groups mt-3">
               <label for="">Password</label>
               <input type="text" class="form-control my-2 p-2" autocomplete="off">
           </div>
           <div class="input-groups mt-3">
               <label for="">Confirm Password</label>
               <input type="text" class="form-control my-2 p-2" autocomplete="off">
           </div>
           <div class="input-groups mt-3">
               <label for="">Birthday</label>
               <input type="date" class="form-control my-2 p-2" autocomplete="off">
           </div>
           <div class="input-groups mt-3">
               <label for="">Address</label>
               <input type="text" class="form-control my-2 p-2" autocomplete="off">
           </div>
           <div class="input-groups mt-3 d-flex justify-content-between">
              <div class="dep">
                <label for="">Department</label>
                <select name="" id="" class="form-select  my-2 p-2" aria-label="Default select example">
                    <option selected disabled>Select Department</option>
                    <option value="1">Medicine</option>
                    <option value="2">Childreen</option>
                    <option value="3">Cardoliogy</option>
                    <option value="4">Authology</option>
                </select>
              </div>
              <div class="deg">
                <label for="">Degree</label>
                <select name="" id="" class="form-select  my-2 p-2" aria-label="Default select example">
                    <option selected disabled>Select Decree</option>
                    <option value="1">Mbbs, Fcps, Md, Phd</option>
                    <option value="2">Mbbs, Fcps</option>
                    <option value="3">Mbbs</option>
                </select>
              </div>
           </div>
           <button class="btn btn-primary my-2">Submit</button>
       </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>