<!DOCTYPE HTML>
<title>
WELCOME_ADMIN
</title>
<head>
</head>
<style>
body
{
background-color:orange;
}
 h1
 {
 color: Red;
 }
</style>
<body>

<h1><Welcome to admin Panel></h1>

</br>
</br>
<form action="comment_show.php" method="POST">
<tr>
  <td><input type='submit' style='height:30px;width:200px ;background-color:pink;margin-left:300px; align:right' value='SHOW_COMMENT'></td>
</tr>
</form>
</br>
</br>
</br>

<form action="send_mail.php" method="POST">
<tr>
  <td><input type='submit' style='height:35px;width:200px;margin-left:300px;background-color:green' value='Reply'></td>
</tr>
</form>

</br>
</br>
</br>




<form action="change_admin_password.php" method="POST">
<tr>
  <td><input type='submit' style='height:35px;width:200px;margin-left:300px;background-color:orange' value='Change Password'></td>
</tr>
</form>
</br>
</br>
<a href="http://localhost/project/files/"><input type='submit' style='height:35px;width:200px;margin-left:300px;background-color:green' value='Main Page'></td>

</body>
</html>