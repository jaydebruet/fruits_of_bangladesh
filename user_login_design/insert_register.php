<?php
$con=mysqli_connect("localhost","root","","fruits_bangla");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security

$email= mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['pass']);



$sql="INSERT INTO tbl_registration(email,password)
VALUES ('$email','$password')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1  person is registered now";

mysqli_close($con);
?>