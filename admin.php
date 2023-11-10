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
  #aa{
color:rgba(47, 124, 255, 0.589);
margin-left:700px;
font-weight: bolder;


  }
  table{
margin-top:200px;
width:900px ;
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
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="navbar.php">Acceuil</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="formation.php">Formation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="browse formation.php">Browse </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cours
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="cour html_css.php">HTML/CSS</a></li>
                  <li><a class="dropdown-item" href="#">JS</a></li>
                  <li><a class="dropdown-item" href="#">bootstrap/jquery</a></li>
                  <li><a class="dropdown-item" href="#">Photoshop</a></li>
                  </ul>
              </li>

            </ul>
           



                </li></ul>
          </div>

              
        </div>
        <a class="dropdown-item" id='aa' href="?logout">log out</a>
      </nav>
      
    </div>

    <center>
  
  <div class="alert alert-success" role="alert">
   
    <strong>Success!</strong> You have been signed in successfully!
  </div>
  <script>window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove(); 
      });
  }, 1000);</script>
      <h1>welcome Admin
      
      </h1>
      
      
  </center>

<?php 
session_start();


include('conection.php');

if(isset($_GET['logout'])){
          
  session_destroy();
    header("location:php4.php");
  }
$con = mysqli_connect("localhost","root" ,"","etudiant");
$result = mysqli_query($con,"SELECT * FROM student");?>
    <form method='POST'>
      <center>
      
<table border='1'>

<tr>
<th>name</th>
<th>email</th>
<th>password</th>
<th>Image</th>
<th>Id</th>
</tr>
<?php
echo "<h2>users</h2>";
while( $row= mysqli_fetch_array($result)){
echo '<tr>';
echo '<td>'.$row['name'].'</td>';
echo '<td>'.$row['email'].'</td>';
echo '<td>'.$row['password'].'</td>';
echo '<td>'.$row['image'].'</td>';
echo '<td>'.$row['id'].'</td>';
echo "<td> <a class='btn btn-danger'  href='delete.php? id=$row[id]'>delete</a> </td>";
echo '</tr>';


}







?>
</table></center>
<?php
$res = mysqli_query($con,"SELECT * FROM mes_formations");?>

  <center>
  
<table border='1'>

<tr>
<th>title</th>
<th>discription</th>
<th>price</th>
<th>Image</th>
<th>situation</th>
<th>user id</th>
</tr>
<?php
echo "<h2>formation</h2>";
while( $rows= mysqli_fetch_array($res)){
echo '<tr>';
echo '<td>'.$rows['name'].'</td>';
echo '<td>'.$rows['discription'].'</td>';
echo '<td>'.$rows['prix'].'</td>';
echo '<td>'.$rows['image'].'</td>';
echo '<td>'.$rows['user_id'].'</td>';
echo '<td>'.$rows['situation'].'</td>';
echo "<td> <a class='btn btn-danger'  href='refuser_formation.php? id=$rows[id]'>refuser</a><a class='btn btn-success'  href='acepter_formation.php? id=$rows[id]'>acepter</a> </td>";
echo '</tr>';


}







?>
</table></center>
</form>
</body>
</html>