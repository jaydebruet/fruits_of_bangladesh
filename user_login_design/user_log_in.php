<?php
include("database.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 


$myusername=addslashes($_POST['email']); 
$mypassword=addslashes($_POST['pass']); 


$sql="SELECT * FROM tbl_registration WHERE email='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$active=$row['active'];

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: comment_insert.php");
}
else 
{
$error="Your Login Name or Password is invalid";
echo "$error";
}
}
?>




<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Log in form</h1>
<div id="login">
			<form action="" method="POST">
				Email: <input type="text" name="email" /> <br />
				Password: <input type="password" name="pass" /> <br /> <br/>
				<input type="submit" value="Log in" name="submit"/> </br>
				
			</form>
			<a href="user_registration.php"><input type="submit" value="Register" /></a>
			
			</br>
			<a href="http://localhost/project/files/"><input type="submit" value="Back" /></a>
			
		</div>
</div>
</body>
</html>