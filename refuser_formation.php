<?php 

include('conection.php');
$ID=$_GET['id'];
$update="UPDATE mes_formations set situation='refuser' WHERE id=$ID";
mysqli_query($con,$update);
header("location:admin.php");
?>