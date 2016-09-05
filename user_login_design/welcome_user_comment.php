<?php
include("database.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

$email=addslashes($_POST['email']); 
$password=addslashes($_POST['pass']); 


$sql="SELECT * FROM tbl_registration WHERE email='$email' and password='$password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
//$active=$row['active'];

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
//session_register("email");
//$_SESSION['login_user']=$email;

header("location: ");
}
else 
{
$error="Your Login Name or Password is invalid";
echo "$error";
}
}
?>