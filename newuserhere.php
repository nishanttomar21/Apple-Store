<?php
$uname=$_POST['user_name'];
$name=$_POST['Name'];
$pass=$_POST['password'];
$phone=$_POST['phone_number'];
$pay=$_POST['payment_mode'];
$conn = new mysqli("localhost","root","","dbms");
$c = "INSERT INTO user(user_name,password,phone_number,payment_mode,Name) VALUES('$uname','$pass','$phone','$pay','$name')";
if($conn->query($c) == TRUE)
{


//echo '<h1> WELCOME!!!!!!!!!!!</h1>';
}
else
{ 
echo mysqli_error($conn);
echo 'not done'; }


?>
<html>
<body bgcolor = "#eeeeee">

	<center>
		<font size = "12";
		<h><strong>You've Successfully Registered!</strong></h>
		<font size = "5";
		<br>
		<p><a href = "main.html">Click Here To Return To The Main Page</a></p>
		</center>

</body>
</html>
