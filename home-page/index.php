
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                </div>
            </nav>
            <div class="auth">
                <a href="./Auth-patient/index.php">Login</a>
                <a href="./Auth-patient/registration.php">Registration</a>
            </div>
        </div>
    </header>

    <!-- Hero Image and Text -->
    <div class="container">
        <section>
            <div class="hero-text">
                <h1> <span> MAKE YOUR </span>
                APPOINTMENT 
                FAST</h1>
            </div>
            <div class="hero-image">
                <img src="../Images/hero.png" alt="">
            </div>
        </section>
    </div>

    <!-- Sections -->
    <div class="cards-section">
        <div class="container card-items">
            <div class="card">
                <img src="../Images/doctor.png" alt="">
                <a href="./Auth-patient\logout.php" class="btn btn-primary">Call Doctor</a>
            </div>
            <div class="card">
                <img src="../Images/blood.png" alt="">
                <a href="./Auth-patient\logout.php" class="btn btn-primary">Blood Donor</a>
            </div>
            <div class="card">
                <img src="../Images/ambulance.png" alt="">
                <a href="./Auth-patient\logout.php" class="btn btn-primary">Umbulance</a>
            </div>
            <div class="card">
                <img src="../Images/buy-medicine.png" alt="">
                <a href="./Auth-patient\logout.php" class="btn btn-primary">Medical Purchase</a>
            </div>
        </div>
    </div>

</body>
</html>