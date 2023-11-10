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
    #tm{
    width: 300px;
    height: 40px;
    border-radius: 5px;
    border-color: rgb(0, 180, 200);
    margin-left: 30px;}
    #p4{
border-style: solid;
width: 500px;
height: 450px;
border-color: black;
margin-left:50px;
margin-top: 100px;
}

#aa1{
    
    text-decoration: none;
  
}
#tm{
width: 300px;
height: 40px;


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
              <li class="nav-item active">
                <a class="nav-link active" href="php1.php">Inscription</a>
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
      
    </div>
<center>
    
    <div id="p4">
    <h1>Sin Up</h1>
    <form  method="POST" enctype="multipart/form-data">
        
        name<br>
        <input type="text" id="tm" name="name">
<br>email<br>
<input type="text" id="tm" name="email"><br>password<br>
<input type="password" id="tm" name="password">
<br><br>
<input type="file" id="file" name="image" style="display:none"><label for="file" style="border:1px solid;background-color: rgba(47, 124, 255, 0.589);color:white;">image de profile</label><br>
<br>

<button name="add" style="width:150px" class="btn btn-success">Sin Up</button>

<br><br>
<center>
Already have an account?
<a href="php4.php" style="color: rgba(47, 124, 255, 0.589);margin-right:70px">Log In</a> </center>
    </form></div></center>
    <?php
    session_start();

   if(isset($_SESSION["email"])){
        header("location:page3.php");}

    
$con = mysqli_connect("localhost","root" ,"","etudiant");

if (mysqli_connect_error()){
    echo "Failed to connect to MySQL: ";
}                             
    if(isset($_POST['add'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $password=$_POST['password'];
     $image= $_FILES['image'];
     $image_location=$_FILES['image']['tmp_name'];
     $image_name=$_FILES['image']['name'];
     $image_up="images/".$image_name;
      
        $sql="insert into student (name,email,password,image )values('$name','$email','$password','$image_up')";
mysqli_query($con,$sql);
if(move_uploaded_file($image_location,'images/'.$image_name)){
echo "<script>alert('ok')</script>";

}
      if($sql){
        echo 'compte is save';
header("location:php4.php");
      }
      else{
        echo 'error';
      }
    }

   if(isset($_POST['del'])){
     $dlt="delete from student where email='$email'";
    mysqli_query($con,$dlt);
    if($dlt){
        echo 'student deleted';
     }
     else{
         echo 'error';
     }}
     mysqli_close($con);

    ?>

    
    
 
</body>
</html>