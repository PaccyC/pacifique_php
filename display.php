
<?php
include "connection.php";
include "export.php"
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
</head> 
<body>
    
<div class="container">
    <button class="btn btn-primary my-5">
        <a href="signup.php" class="text-light">Add User</a> 
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
 
      <th scope="col">OPERATIONS</th>

    </tr>
  </thead>
  <tbody>
   <?php
   $query= 'SELECT * FROM `student`';
   $result=mysqli_query($conn,$query);
   if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row["student_id"];
        $fname=$row["fname"];
        $lname=$row["lname"];
        $email=$row["email"];
   

        echo '<tr>
        <td scope="row">'.$id.'</td>
        <td scope="row">'.$fname.'</td>
        <td scope="row">'.$lname.'</td>
        <td scope="row">'.$email.'</td>
     
        <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
        
        </td>
        </tr>';
    }
   }


   ?>

  </tbody>
</table> 
</div>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button type="submit" id="export_csv_data" name='export_csv_data' value="Export to CSV" class="btn btn-info">Export to CSV</button>
			</form>
</body>
</html>