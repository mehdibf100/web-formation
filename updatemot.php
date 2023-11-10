<?php 
include('conection.php');
$ID=$_GET['id'];
$con = mysqli_connect("localhost","root" ,"","etudiant");
$result = mysqli_query($con,"SELECT * FROM student where id=$ID");
$row= mysqli_fetch_array($result);
$old_pas=$row['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="project.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>etudiant</title>
</head>
<body>
<center>
    
    <h1>update password</h1>
    
    <form  method="POST" >
        
         old password<br>
        <input type="text" id="t1" name="old_pas">
<br>new passwod<br>
<input type="text" id="t1" name="new_pas" >

<br><br>

<button name="update_pas" type="submit" class="btn btn-success">update password</button></form>
</center>
<?php
   if(isset($_POST['update_pas'])){
       
 $pas_old2=$_POST['old_pas'];
  $new_pas=$_POST['new_pas'];
  if($pas_old2==$old_pas){
    $update_pass="UPDATE student set password='$old_pas',password='$new_pas' WHERE id=$ID";
mysqli_query($con,$update_pass);
header("location:page3.php");
}

else{
    echo 'ecrire le mot de passe corecte';
}

}



?>

</body>
</html>       
