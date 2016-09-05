<html>
<!DOCTYPE HTML>
<body>
<style>
body
{
background-color:blue;
}
</style>
<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("jaydeb.ruet@gmail.com", "$subject",
  $message, "From:" . $email);
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='mailform.php'>
  Email: <input name='email' type='text' /><br />
  Subject: <input name='subject' type='text' /><br />
  Message:<br />
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type='submit' />
  </form>";
  }
?>
<a href="welcome_admin.php"> <input type='submit'  style='height:35px;width:200px;margin-left:300px;background-color:orange' value='Back'></a>
</body>
</html>