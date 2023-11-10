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
              <li class="nav-item active">
                <a class="nav-link active" aria-current="page" href="navbar.php">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="php1.php">Inscription</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="formation.php">Formation</a>
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
      
    </div><center>
      <br>
      <br>
      <div class="alert alert-danger" id="alert" role="alert" style="visibility: hidden;width:40%">
 
 <strong>error!</strong>verif your email!
</div>
<script>window.setTimeout(function() {
   $(".alert").fadeTo(500, 0).slideUp(500, function(){
       $(this).remove(); 
   });
}, 1000);</script>
    <h1>Log In</h1>
    <div id="form" style="height: 250px;">
    <form  method="POST">
        
        
    email<br>

<input type="text" id="t1" name="email">
<br>password<br>
<input type="password" id="t1" name="password">

<br><br>
<button name="add" class="btn btn-success">Log In</button>

    </form></div></center>
    <?php
        session_start();
        if(isset($_SESSION["email"])){
            header("location:page3.php");
        }


$con = mysqli_connect("localhost","root" ,"","etudiant");
if (mysqli_connect_error()){
    echo "Failed to connect to MySQL: ";
}

if(isset($_POST['add'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
    $sql="select * from admin where email='$email' and password='$password'";
$res=mysqli_query($con,$sql);
$rows=mysqli_num_rows($res);
if($rows==1){
$_SESSION['email']=$email;
echo 'log in success';
header("location:admin.php");
}}
   
 
                                
    if(isset($_POST['add'])){
      $email=$_POST['email'];
      $password=$_POST['password'];
        $sql="select * from student where email='$email' and password='$password'";
$res=mysqli_query($con,$sql);
$rows=mysqli_num_rows($res);
if($rows==1){
    $_SESSION['email']=$email;
echo 'log in success';
header("location:page3.php");

}
else{

    echo " <script>document.getElementById('alert').style.visibility='visible'</script> ";
}}


     
    

    ?>

 
    </body>

</html>