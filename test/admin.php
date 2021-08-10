<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
 <?php 
    $conn = mysqli_connect('localhost','root','','test');
    $sql = "SELECT * FROM approving";
    $result = mysqli_query($conn, $sql);
 ?>
<body>
    <div class="container">
        <h2>Admin Panel</h2>

        <a href="logout.php" class="btn btn-primary">Logout</a>
       
        <table class="table" style="width: 400px; margin:auto">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Status</th>
                </tr>
            </thead> 
            <?php 
                while($row = mysqli_fetch_array($result)){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['username'] ?></td>
                    <td>
                        <?php if($row['status']== '1'){?>
                            <button class="btn btn-success" id="btn" onclick="btn()">Approve</button>
                       <?php }else{?>
                        <button class="btn btn-danger" id="btn" onclick="btn()">Reject</button>
                       <?php }?>
                    </td>
                </tr>
            </tbody>
            <?php }?>
        </table>
        <script>
            function btn (){
                x = document.getElementById('btn');
                x.style.backgroundColor='red'
                x.innerHTML = 'Rejected'
            }
        </script>
    </div>
</body>
</html>