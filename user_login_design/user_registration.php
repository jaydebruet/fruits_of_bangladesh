<?php
//include('login.php'); // Includes Login Script
//?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Registration Form</h1>
<div id="login">
         <form action="insert_register.php"  method="POST">
			
				Email: <input type="text" name="email" /> <br />
				Password: <input type="password" name="pass" /> <br /> <br/>
				
				<input type="submit" value="Register" name="submit"/></br>
		
				  </form>
				  <a href="user_log_in.php"><input type="submit" value="LOG IN" /></a>
			
			</br>
			<a href="http://localhost/project/files/"><input type="submit" value="Back" /></a>
				  
		</div>
</div>
</body>
</html>