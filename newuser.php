<?php
$conn = new mysqli("localhost","root","","dbms");
$user_id=$_POST['user_id'];
$name=$_POST['name'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$age=$_POST['age'];
$user_type=$_POST['user_type'];
$city=$_POST['city'];
$pass=$_POST['password'];

$c = "INSERT INTO user(user_id,name,mail,phone,address,age,user_type,city,password) VALUES('$user_id','$name','$mail',$phone,'$address','$age','$user_type','$city','$pass')";
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