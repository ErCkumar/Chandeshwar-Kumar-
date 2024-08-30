
<?php
$con = mysqli_connect("localhost","root","","cms");
// Check connection
if ($con == false){

  die("Connection Error" . mysqli_connect_error());
  }
?>