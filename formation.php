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
    #fp{
      border-style: solid ;
      border-color:gray;
border-radius: 50%;
width: 60px;
height: 60px;
margin-left:  600px;

    }
    #fpm{
width: 100%;
height: 100%;
border-radius: 50%;

    }
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
                <a class="nav-link active" href="formation.php">Formation</a>
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
    <div class="container">
<center>
  

    <h1>Notre Formation
    
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
}, 1000);</script>

    
</center>
<div class="container">
<?php 

include('conection.php');


$form = mysqli_query($con,"SELECT * FROM formation");
while     ( $rows= mysqli_fetch_array($form)){
echo 

"<div style=' float:left;margin-left:80px;margin-top:100px;'>  <div class='card' style='width: 20rem;height:420px'>
 <img src='$rows[image]' class='card-img-top' alt='...'>
 <div class='card-body'>
   <h5 class='card-title'>$rows[name]</h5>
   <p class='card-text'>$rows[discription]</p><p>$rows[prix]$</p>
   <a href='#' class='btn btn-primary'>Go somewhere</a>
 </div>
</div></div>";}






 ?></div>