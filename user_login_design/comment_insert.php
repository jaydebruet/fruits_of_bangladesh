<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
// define variables and set to empty values
include("database.php");
//session_start();
$con=mysqli_connect("localhost","root","","fruits_bangla");
$nameErr = $emailErr = $genderErr =$error=$corr=  "";
$name = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["name"])||empty($_POST["email"])||empty($_POST["comment"])||empty($_POST["gender"])) {
     $nameErr = "Name is required";
	 $emailErr = "Email is required";
	 $comment = "";
	 $genderErr = "Gender is required";
	 $error="Data not inserted";
	 
   } 
   
   
   else {
     $name = test_input($_POST["name"]);
	 $email = test_input($_POST["email"]);
	  $comment = test_input($_POST["comment"]);
	 $gender = test_input($_POST["gender"]);
	 $corr="Data inserted succesfully";
	 
	 $sql="INSERT INTO tbl_comment(name,mail_id,comment,gender,Date)
VALUES ('$name','$email','$comment','$gender',SYSDATE())";
mysqli_query($con,$sql);
   }
   
   
   
   
//if (!mysqli_query($con,$sql)) {
  //die('Error: ' . mysqli_error($con));
//}
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}



// escape variables for security
//$name = mysqli_real_escape_string($con, $_POST['name']);
//$email= mysqli_real_escape_string($con, $_POST['email']);
//$comment = mysqli_real_escape_string($con, $_POST['comment']);
//$gender = mysqli_real_escape_string($con, $_POST['gender']);
//$date=mysqli_real_escape_string($con, $_POST['date']);



echo " ";
?>
<?php echo  $corr;?></span>
 <?php echo  $error;?></span>
<h2>Comment </h2>

<p><span class="error">* required field.</span></p>


<form method="post" 
        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
   Name: <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   
   E-mail: <input type="text" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   
   <input type="submit" style='height:35px;width:200px;margin-left:300px;background-color:orange' name="submit"  value="submit">
   </br>
</form>
</br>
</br>
<a href="http://localhost/project/files/"> <input type='submit'  style='height:35px;width:200px;margin-left:300px;background-color:orange' value='Back'



</body>
</html>