


<?php

include ('connect.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

$sql = "INSERT INTO `crud` (`name`, `email`, `mobile`, `password`) 
        VALUES ('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "Data Inserted Successfully";
    }
    else{
            die("Connection failed: " . $con->connect_error);
    }


}

 ?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>crud operation</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
   
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email">
  </div>


  <div class="form-group">
    <label >Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number">
  </div>

  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>


  </body>
</html>