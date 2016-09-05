<?php
$con=mysqli_connect("localhost","root","","fruits_bangla");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$username = mysqli_real_escape_string($con, $_POST['username']);
$password= mysqli_real_escape_string($con, $_POST['password']);


 $user=mysqli_query($con,"Select * from admin");
 //$key=mysqli_query($con,"Select pass from admin");
//$row=mysqli_fetch_array($user);

 while($row=mysqli_fetch_array($user)){
   //echo "<tr>";
   //echo "<td>" .$row['u_name']. "</td>";
   //echo "<td>" .$row['pass'].   "</td>";
   $vol=$row['u_name'];
   //echo $vol;
   //echo "<br>";
   }
   
$sql="UPDATE admin set u_name='$username',pass='$password' where u_name='$vol'";


if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
//echo "Your password changed";

mysqli_close($con);
?>


<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>CHANGE PASSWORD</h1>
<div id="login">
			<form action="" method="POST">
				NEW Username: <input type="text" name="username" /> <br />
				NEW Password: <input type="password" name="password" /> <br /> <br/>
				<input type="submit" value="OK" name="submit"/> </br>
			
			</form>
			<a href="http://localhost/project/files/"><input type="submit" value="Home" /></a>
			
		</div>
</div>
</body>
</html>

