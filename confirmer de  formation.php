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
  <style>

    
    p{
      margin-left:10px;margin-right:10px;
    }
    ul {
  list-style-type: none;
}
.container{
    margin-top:40px;
}


  </style>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="navbar.php">
            <span style="font-weight: bold;font-size:25px;">Tunisia</span>
            <span class="logo">Coding</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link" aria-current="page" href="navbar.php">Acceuil</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" href="formation.php">Mes Formation</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cours
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="cours html_css.php">HTML/CSS</a></li>
                  <li><a class="dropdown-item" href="#">JS</a></li>
                  <li><a class="dropdown-item" href="#">bootstrap/jquery</a></li>
                  <li><a class="dropdown-item" href="#">Photoshop</a></li>
                </ul>
              </li>

            </ul>
            
            
       
          </div>

              
        </div>
       
      </nav>
      
    </div>
    <form  method="POST">
    <div class="container">
<center>
  

    <h1>Mes Formations
    
    </h1>
    
</center>

<center>
  
<div class="alert alert-success" role="alert">
 
  <strong>Success!</strong> You have been signed in successfully!
</div>
<script>window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 1000);
/*function conf(){
  b=document.getElementById('confirmer')
  b.remove()
}*/
</script>
<br>
  <br>
<div id='confirmer'>
  tu veus confirmer ou non
  <br>
  <br>
  <button name="confirmer" class="btn btn-success"  onclick='conf()'>confirmer</button>
  <button name="annul" class="btn btn-danger" onclick='annul()'  >Annuler</button></div>
</div>
</center>
<div class="container" style='margin: top -100px;'>

<?php 
session_start();
$user_email=$_SESSION["email"];
include('conection.php');
$res = mysqli_query($con,"SELECT * FROM student where email='$user_email'");
$rows= mysqli_fetch_array($res);
$ID=$_GET['id'];

$result = mysqli_query($con,"SELECT * FROM formation where id='$ID'");
$row= mysqli_fetch_array($result);
$name=$row['name'];
$desc=$row['discription'];
$prix= $row['prix'];
$image=$row['image'];

if(isset($_POST['annul'])){
  header("location:page3.php");
}
if(isset($_POST['confirmer'])){
echo 'lll';

$sql="insert into mes_formations (name,discription,image,prix,user_id,situation ) values ('$name','$desc','$image',$prix,$rows[id],'En cours de traitemment')";
mysqli_query($con,$sql);
if($sql){
  echo 'envoyer';
}
header("location:page3.php");}
?></form></div></div>