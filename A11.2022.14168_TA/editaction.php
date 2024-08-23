<?php
       $id=$_POST['id'];
       $title=$_POST['title'];
       $date=$_POST['date'];
       
    include 'database.php';
    $sql="UPDATE tugas_ashief SET nama_tugas='$title', deadline='$date' WHERE id_tugas=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");
    }

?>