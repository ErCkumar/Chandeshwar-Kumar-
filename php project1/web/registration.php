
<!DOCTYPE html>
<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--header section-->
<nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand " href="#">C Kumar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form> 
      </ul>
      <ul class="navbar-nav mx-4">
      <a href="login.php" class="btn btn-primary  " tabindex="-1" role="button" aria-disabled="true">Login</a>
      </ul>
      <ul class="navbar-nav mx-4">
      <a href="homepage.php" class="btn btn-primary  " tabindex="-1" role="button" aria-disabled="true">Home</a>
      </ul>
    </div>
  </div>
</nav>

<!--form section-->
<div class="container my-2">
<form class="form" method="post"action="">
    <p class="title">Register </p>
    <?php
    if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>
    <p class="message">Signup now and get full access to our app. </p>
        
        <label>
          
            <input required="" name="name" placeholder="" type="text" class="input">
            <span>Name</span>
        
        </label>
           
    <label>
        <input required=""name="email" placeholder="" type="email" class="input">
        <span>Email</span>
    </label> 
        
    <label>
        <input required=""name="password" placeholder="" type="password" class="input">
        <span>Password</span>
    </label>
    <div class="radio">
      <input type="radio"name="role"id="role" value="admin"> Admin
      <input type="radio"name="role"id="role" value="employee"> Employee
      </div>
    <button type="submit"class="submit"name="submit">Submit</button>
    <a class="btn btn-primary" href="registration.php" role="button">cancel</a>


    <p class="signin">Already have an acount ? <a href="login.php">Signin</a> </p>
</form> 
</div>

<?php

include('config.php');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];

$query = mysqli_query($con,"Insert into users(name, email, password,role) Values ('$name','$email','$password','$role')");
if($query){
  
    $_SESSION['success'] ="<h3 style='color:green'>Data Inserted Successfully</h3>";
    header('Location:registration.php');
  }

else{
    echo "there is an error";
}
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>