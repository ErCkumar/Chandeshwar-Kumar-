<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST['email'];
    $password = $_POST['password'];
    

    //database connection
   $host = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbname = "cms";

   //validation login authentication
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);



   //admin login validation
   //$role=$row['role']
//if($role == "admin"){
  //      header('Location: admin/dashboard.php');

//}elseif($role == "employee"){
  //      header('Location: employee/dashboard.php');
//}
//else{
    //$_SESSION['error'] = "Invalid email or password";
  //  header('Location: login.php');
//}





   if($conn->connect_error){
    die("Connection Error: ". $conn->connect_error);

   }
   //validation login authentication with admin or employee
   $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
   
   //execute query
   $result = $conn->query($query);

   if($result->num_rows == 1){
     //login success
     header("Location: success.html");
     exit();
   }
   else{
        header("Location: failed.html");
        exit();
    
}
 $conn->close();
   
}
?>