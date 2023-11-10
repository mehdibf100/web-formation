<?php
     session_start();
    if(!isset($_SESSION["email"])){
         header("location:php1.php");}
         if(isset($_GET['logout'])){
          
          session_destroy();
          header("location:php4.php");
        }
        $email=$_SESSION["email"];
       $con = mysqli_connect("localhost","root" ,"","etudiant");
       $result = mysqli_query($con,"SELECT * FROM student where email='$email'");
       $row= mysqli_fetch_array($result);
         

/*echo "<img src='$row[image]' class='card-img-top' alt='...'>";*/
        

         
     
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
  <script src="main.js"></script>
    <title>etudiant</title>
</head>
<body onload="cart()">
  <style>
    #fp{
      border-style: solid ;
      border-color:gray;
border-radius: 50%;
width: 60px;
height: 60px;
margin-left:  200px;

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
#btn1{
width:70px;
height:35px;
margin-left:20px;
}

  </style>
  <form method="POST">
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="page3.php">
            <span style="font-weight: bold;font-size:25px;">Tunisia</span>
            <span class="logo">Coding</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link active" aria-current="page" href="page3.php">Acceuil</a>
              </li>
              
              <li class="nav-item">
              <?php echo "<a class='nav-link ' href='Mes formations.php? id=$row[id]'>Mes Formation</a>"?>
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
            
            <input type="text" id="sh" placeholder="Search" name="Search"> <a name="bt1" href="#container"  id='btn1' class="btn btn-outline-primary">Search</a></form>
            <?php  echo " <div id='fp'> <img src='$row[image]' id='fpm' alt='' ></div> <p>$row[name]</p>";?>
            <ul>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="?logout">log out</a></li>
                  <li><?php echo "<a class='dropdown-item' href='update.php? id=$row[id]'>change profile</a>"; ?></li>
                  <li><?php echo "<a class='dropdown-item' href='updatemot.php? id=$row[id]'>change password</a>"; ?></li>

                </ul></li></ul>
          </div>

              
        </div>
       
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
}, 1000);


  


</script>

    
</center>
<center>
<div id="carouselExampleIndicators" class="carousel slide" style="width:90%;height:50%">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images1/devlop.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images1/work.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images1/img.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images1/dev.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div></center>
<div class="container">
<?php 

include('conection.php');
if(isset($_POST['Search'])){
$Search=$_POST['Search'];
if(($Search=="html")||($Search=="js")||($Search=="python")||($Search=="photoshop")){
 echo "     <div class='container'>
<center><h1>Notre Formation $Search

</h1></center>";
$form = mysqli_query($con,"SELECT * FROM formation where name='$Search'");
while     ( $rows= mysqli_fetch_array($form)){
echo 

"<div id='cont' style=' float:left;margin-left:80px;margin-top:100px;'>  <div class='card' style='width: 20rem;height:420px'>
 <img src='$rows[image]' class='card-img-top' alt='...'>
 <div class='card-body'>
   <h5 class='card-title'>$rows[name]</h5>
   <p class='card-text'>$rows[discription]</p><p>$rows[prix]$</p>
   <a href='confirmer de  formation.php? id=$rows[id]' class='btn btn-primary'>Get It</a>
 </div>
</div></div>"; 

}

}

 
 elseif($Search==''){
  echo"<h6 style='color:'red';>ecrire le nom de votre formation</h6>";}
 else{
echo"<h6 style='color:'red';>Cette formation n'est exite</h6>";}}

 ?></div>
     <div class="footer-dark">
        <footer>
            <div id="container">
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
  margin-top:550px
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

