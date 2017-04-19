<?php

$user_name=$_POST['user_name'];
$pass=$_POST['password'];
$conn = new mysqli("localhost","root","","dbms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a=" SELECT * FROM user WHERE user_name='$user_name' and password='$pass' ";
$result = $conn->query($a);
  if(mysqli_num_rows($result) > 0)
$row = mysqli_fetch_assoc($result);

?>
<html>
<body style=" background-image: url('qwe1.jpg');color:yellow">
<center><h1> <u>THE INFORMATION IS </u></h1>
<h3> Your User_Name is :</h3>
<?php
echo $row["user_name"];
?>
<br>
<h3> Your Mode of Payment is</h3>
<?php
echo $row["pay"];
?>
<h5> Your Phone Number is</h5>
<?php
echo $row["phone_number"];
?>
</html>