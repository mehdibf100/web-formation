<?php 
include('conection.php');
$ID=$_GET['id'];
$con = mysqli_connect("localhost","root" ,"","etudiant");
$result = mysqli_query($con,"SELECT * FROM student where id=$ID");
$row= mysqli_fetch_array($result);?>
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
    <h1>update</h1>
    <div id="form">
    <form  method="POST" enctype="multipart/form-data">
        
         name<br>
        <input type="text" id="t1" name="name" value='<?php echo $row['name']; ?>'>
<br>email<br>
<input type="text" id="t1" name="email" value='<?php echo $row['email']; ?>'>

<br><br>
<input type="file" id="file" name="image" style="display:none"><label for="file" style="border:1px solid;background-color: rgba(47, 124, 255, 0.589);color:white;">image de profile</label><br>
<br>
<button name="update" type="submit" class="btn btn-success">update profile</button>
</center>
<?php 
   if(isset($_POST['update'])){
       
        $email=$_POST['email'];
      $name=$_POST['name'];
     $image= $_FILES['image'];
     $image_location=$_FILES['image']['tmp_name'];
     $image_name=$_FILES['image']['name'];
     $image_up="images/".$image_name;
      
        $update="UPDATE student set name='$name',email='$email' ,image='$image_up' WHERE id=$ID";
mysqli_query($con,$update);
if(move_uploaded_file($image_location,'images/'.$image_name)){
    echo "<script>alert('ok')</script>";
    
    }
          if($update){
            echo 'compte is save';
    header("location:php4.php");
          }
          else{
            echo 'error';
          }}

?>

</body>
</html>