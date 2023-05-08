
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
    <div class="container">
      <form class="row g-3" method="POST">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email" autocomplete="off" required>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="password" autocomplete="off" required>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" name="submit">Login</button>
        </div>
      </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
     crossorigin="anonymous"></script>
  </body>
</html>
<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $select = "SELECT * FROM `student` WHERE email='$email'";
    $run = mysqli_query($conn, $select);

   $row_user=mysqli_fetch_array($run);
   $db_email=$row_user["email"];
   $db_password=$row_user["password"];
   if($email== $db_email){
    header("Location:display.php");
   }
   else{
    echo "Invalid email or passeord";
   }

   $_SESSION["email"]=$db_email;

}
?>