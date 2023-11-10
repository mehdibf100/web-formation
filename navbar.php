<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="project.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>


  <body>
   <div class="container-fluid fixed-top">
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
              <a id="aa" href="php4.php" style="color: rgba(47, 124, 255, 0.589);">Log In</a> 
              <button id="bt4" class="btn btn-primary"  onclick="window.location='php1.php'">Sin Up</button>
            </ul>

          </div>

        </div>

      </nav>
      
    </div>
<br><br><br>

<div class="container" style="margin-top: 50px;">
<form method="POST">
    <div id="d1">
      <h1 style="color: rgba(47, 124, 255, 0.589); font-size: 40px;">Unlock Your Full Potential:</br>Prepare to embark on  an<br> extraordinary educational odyssey !</h1>
      <h4>Explore our training website to develop your skills <br>and reach new heights in your professional journey.

      </h4>
      <input type="text" id="sh" placeholder="Search" name="Search">  <button name="bt1" id="bt1">Get started</button></div>
       <img src="image1.jpg" width="50%" height="50%" id="im1">
       
      </form></div>
 
<?php 
session_start();

        if(isset($_SESSION["email"])){
          $email=$_SESSION["email"];
          if($email=='admin@gmail.com'){
            header("location:admin.php");
          }
          else{
          header("location:page3.php");
      }}

include('conection.php');
if(isset($_POST['bt1'])){
$Search=$_POST['Search'];
if(($Search=="html")||($Search=="js")||($Search=="python")||($Search=="photoshop")){
  echo "     <div class='container'>
 <center><h1>Notre Formation $Search
 
 </h1></center>";


 $form = mysqli_query($con,"SELECT * FROM formation where name='$Search'");
 while     ( $rows= mysqli_fetch_array($form)){
 echo 
 
 "<div style=' float:left;margin-left:80px;margin-top:100px;'>  <div class='card' style='width: 20rem;height:420px'>
  <img src='$rows[image]' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$rows[name]</h5>
    <p class='card-text'>$rows[discription]</p><p>$rows[prix]$</p>
    <a href='php4.php' class='btn btn-primary'>Get It</a>
  </div>
 </div></div>"; }}
 
  
  elseif($Search==''){
   echo"<h6 style='color:'red';>ecrire le nom de votre formation</h6>";}
  else{
 echo"<h6 style='color:'red';>Cette formation n'est exite</h6>";}}
 

 ?></div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2018</p>
            </div>
        </footer>
    </div>
    <style>
      .footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
  margin-top:700px
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}
    </style>
  </body>
</html>
