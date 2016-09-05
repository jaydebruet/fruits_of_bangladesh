

<!DOCTYPE HTML>
<HTML>
<body>
<h2>PHP Form Validation Example</h2>

<form action="" method="post">


   Name: <input type="text" name="name">

   <br><br>
   
  Mail-id: <input type="text" name="mail_id">  </br></br>
  
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
  
   <br><br>
   
   
	 
   <input type="submit" style='height:35px;width:200px;margin-left:300px;background-color:orange' name="submit"  value="submit"> 
</form>
</br>
</br>
<a href="try.html"> <input type='submit'  style='height:35px;width:200px;margin-left:300px;background-color:orange' value='Back'

</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","fruits_bangla");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$mail_id= mysqli_real_escape_string($con, $_POST['mail_id']);
$comment = mysqli_real_escape_string($con, $_POST['comment']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
//$date=mysqli_real_escape_string($con, $_POST['date']);

$sql="INSERT INTO tbl_comment(name,mail_id,comment,gender,Date)
VALUES ('$name','$mail_id','$comment','$gender',SYSDATE())";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo " ";

mysqli_close($con);
?>