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
<!--css style-->
<style>
    .container {
  max-width: 350px;
  background: #F8F9FD;
  background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
  border-radius: 40px;
  padding: 25px 35px;
  border: 5px solid rgb(255, 255, 255);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
  margin: 20px;
  margin-left:450px;
}

.heading {
  text-align: center;
  font-weight: 900;
  font-size: 30px;
  color: rgb(16, 137, 211);
}

.form {
  margin-top: 20px;
}

.form .input {
  width: 100%;
  background: white;
  border: none;
  padding: 15px 20px;
  border-radius: 20px;
  margin-top: 15px;
  box-shadow: #cff0ff 0px 10px 10px -5px;
  border-inline: 2px solid transparent;
}

.form .input::-moz-placeholder {
  color: rgb(170, 170, 170);
}

.form .input::placeholder {
  color: rgb(170, 170, 170);
}

.form .input:focus {
  outline: none;
  border-inline: 2px solid #12B1D1;
}

.form .forgot-password {
  display: block;
  margin-top: 10px;
  margin-left: 10px;
}

.form .forgot-password a {
  font-size: 11px;
  color: #0099ff;
  text-decoration: none;
}

.form .login-button {
  display: block;
  width: 100%;
  font-weight: bold;
  background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
  color: white;
  padding-block: 15px;
  margin: 20px auto;
  border-radius: 20px;
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
  border: none;
  transition: all 0.2s ease-in-out;
}

.form .login-button:hover {
  transform: scale(1.03);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
}

.form .login-button:active {
  transform: scale(0.95);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
}


</style>
<!--header section-->
<nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand " href="#">C kumar</a>
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
      <a href="registration.php" class="btn btn-primary  " tabindex="-1" role="button" aria-disabled="true">Registration</a>
      </ul>

      <ul class="navbar-nav mx-4">
      <a href="homepage.php" class="btn btn-primary  " tabindex="-1" role="button" aria-disabled="true">Home</a>
      </ul>

    </div>
  </div>
</nav>

<!--form section-->
<div class="container my-4">
<form class="form" method="post"action="logconfig.php">

    <?php
    if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>
    <div class="heading">Sign In</div>
      <input required=""name="email" class="input" type="email" name="email" id="email" placeholder="E-mail">
      <input required=""name="password" class="input" type="password" name="password" id="password" placeholder="Password">
      <span class="forgot-password"><a href="#">Forgot Password ?</a></span>
      <input class="login-button" type="submit" value="Login">
      </div>

    </form>
   
  </div>
</div>

<?php

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