<?php

$user_id=$_POST['user_id'];
$pass=$_POST['password'];
$conn = new mysqli("localhost","root","","dbms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a=" SELECT * FROM user WHERE user_id='$user_id' and password='$pass' ";
$result = $conn->query($a);
if(mysqli_num_rows($result)==0)
{
 	
   echo 'invalid entry';
header("Location: /user.html");
}
else
{
  if(mysqli_num_rows($result) > 0)
$row = mysqli_fetch_assoc($result);
}
?>
<html>
<body style=" background-image: url('qwe1.jpg');color:yellow">
<center><h1> <u>THE INFORMATION IS </u></h1>
<h3> Your ID is :</h3>
<?php
echo $row["user_id"];
?>
<br>
<h3> Your Name is</h3>
<?php
echo $row["name"];
?>
<h4> Your Mail is</h4>
<?php
echo $row["mail"];
?>
<h5> Your Phone is</h5>
<?php
echo $row["phone"];
?>
<h6> Your Address is </h6>
<?php
echo $row["address"];
?>
<br><br>
<h7> Your Age is</h7>
<?php
echo $row["age"];
?><br><br>
<h8> You Are of the Type is</h8>
<?php
echo $row["user_type"];
?><br><br>
<h9> Your City is</h9>
<?php
echo $row["city"];
?>
</html>