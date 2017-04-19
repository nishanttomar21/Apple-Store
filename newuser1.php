<?php
$conn = new mysqli("localhost","root","","dbms");
$user_name=$_POST['user_name'];
$phone=$_POST['phone_number'];
$pay=$_POST['payment_mode'];
$pass=$_POST['password'];

$c = "INSERT INTO user(user_name,password,phone_number,payment_mode) VALUES('$user_name','$pass','$phone','$pay')";
//echo $phone;
if($conn->query($c) == TRUE)
{


echo 'done';
}
else
{ 
echo mysqli_error($conn);
echo 'not done'; }



?>