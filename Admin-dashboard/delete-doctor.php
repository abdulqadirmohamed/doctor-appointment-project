<?php
    include './db/conn.php';

 if(isset($_GET['id'])){
    $id = $_GET['id_delete'];

    
    $sql = "DELETE FROM doctor WHERE id=$id";
    if(mysqli_query($conn, $sql)){
      header('Location: doctor-list.php');
    }else{
        echo 'Delete query error'.mysqli_error($conn);
    }
}

?>