<?php
    include 'database.php';
    $id=$_GET['id'];

    $sql="DELETE FROM tugas_ashief WHERE id_tugas=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");
    }

?>