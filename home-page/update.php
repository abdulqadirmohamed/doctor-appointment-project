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
</head>
<body>
    <form  method="post">
    <input type="hidden" name="id_update" value="<?php echo $row['id'];?>">
        <input type="text" class="form-control" autocomplete="off" required 
        value="<?php echo $row['fullname']?>">
        <button type="submit" name="submit">Save</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];

        $sql = "UPDATE patient SET fullname='$fullname' WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        if($query){      
            // header('Location: profile-petient.php');
            // print_r($result);
            }else{
                echo 'Update error!!'.mysqli_error($conn);
            }
        }
    }}

    ?> 
</body>
</html>