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
    <h1>Browse a formation</h1>
    <div id="form" style="height: 330px;">
    <form  method="POST" enctype="multipart/form-data">
        
        name de formation<br>
        <input type="text" id="t1" name="name_f">
<br>description<br>
<textarea name="descreption"  cols="30" rows="2"></textarea>
<br>prix<br>
<input type="number" id="t1" name="prix">
<br><br>
<input type="file" id="file" name="image" style="display:none"><label for="file" style="border:1px solid;background-color: rgba(47, 124, 255, 0.589);color:white;">image de formation</label><br>
<br>
<button name="add_form" class="btn btn-success">add formation</button>


    </form><br><br></div></center>
    </body>
</html>
<?php
include('conection.php');
    if(isset($_POST['add_form'])){
        $name=$_POST['name_f'];
       $prix= $_POST['prix'];
       $desc= $_POST['descreption'];
       $image= $_FILES['image'];
       $image_location=$_FILES['image']['tmp_name'];
       $image_name=$_FILES['image']['name'];
       $image_up="images1/".$image_name;
        
          $sql="insert into formation (name,discription,image,prix ) values ('$name','$desc','$image_up',$prix)";
              mysqli_query($con,$sql);
  if(move_uploaded_file($image_location,'images1/'.$image_name)){
    echo "<script>alert('ok')</script>";}
    
  if($sql){
    header("location:admin.php");
  }else{
    echo 'error';
  }
    }

?>