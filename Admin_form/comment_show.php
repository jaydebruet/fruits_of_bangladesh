<?php
$con=mysqli_connect("localhost","root","","fruits_bangla");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query=mysqli_query($con,"Select * from tbl_comment ");

echo "<table border='2'>
<tr>
<th> Name</th>
<th> Email</th>
<th> Comment</th>
<th> Gender </th>
<th> Date </th>
</tr>";



while($row=mysqli_fetch_array($query)){
   echo "<tr>";
   echo "<td>" .$row['name']. "</td>";
   echo "<td>" .$row['mail_id'].   "</td>";
   echo "<td>" .$row['comment']. "</td>";
   echo "<td>" .$row['gender'] ."</td>";
   echo "<td>" .$row['Date'] ."</td>";
	
	echo "<td>" ."<form action='reply.php' method='post'><input type='text' name='email' value='".$row['email']."' class='input'>". "</td>";
	  echo "<td>" ."<input type='submit' style='height:35px;width:120px;' value='Reply'>"."</form>". "</td>";
  
   echo "<br>";
   }
   echo "</table>";
   mysqli_close($con);
   ?>
  
   
   <!doctype html>
   <body>
   
   </br>
   </br>
 <tr>
    
 	</tr>
	</body>
	</html>
	