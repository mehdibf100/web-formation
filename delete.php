<?php

include('conection.php');
    $ID=$_GET['id'];
    $dlt="delete from student WHERE id=$ID";
   mysqli_query($con,$dlt);
   if($dlt){
       echo 'student deleted';
    }
    else{
        echo 'error';
    }

    header("location:admin.php");

?>