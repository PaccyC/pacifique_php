<?php

include 'connection.php';
if(isset($_POST['submit'])){

    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO `student` VALUES('$first_name','$last_name','$email','$password')";

    $result=mysqli_query($conn,$sql);

    if($result){

  header("location:display.php");
    }
    else{
        echo "error:".$sql."<br>".$conn->error;
    }

    

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
      crossorigin="anonymous">

  </head>
  <body>
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
     crossorigin="anonymous"></script>
    <div class="container">
      <form class="row g-3" action="signup.php" method="POST">

       <div class="col-md-6">
    <label for="inputFirstname4" class="form-label">Firstame</label>
    <input type="text" class="form-control" name="fname" id="inputFirstname4" autocomplete="off">
  </div>
   <div class="col-md-6">
    <label for="inputLasLastname4" class="form-label">Lastname</label>
    <input type="text" class="form-control" name="lname" id="inputLastname4" autocomplete="off">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" autocomplete="off">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password" autocomplete="off">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</form>
    </div>
  </body>
</html>
