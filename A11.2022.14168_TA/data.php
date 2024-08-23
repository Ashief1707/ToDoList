<?php
$title=$_POST['title'];
$date=$_POST['date'];


include 'database.php';
$sql="INSERT INTO tugas_ashief(nama_tugas, deadline)VALUES('$title','$date')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}

?>