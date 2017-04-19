<?php
$user_id=$_POST['user_id'];
$city=$_POST['city'];
$property_type=$_POST['property_type'];
$max_budget=$_POST['max_budget'];
$area=$_POST['area'];
$pass=$_POST['password'];


$conn = new mysqli("localhost","root","","dbms");
$c = "INSERT INTO buyer(user_id,city,property_type,max_budget,area,password) VALUES('$user_id','$city','$property_type','$max_budget','$area','$pass')";

if($conn->query($c) == TRUE)
{


echo 'done';
}
else
{ 
echo mysqli_error($conn);
echo 'not done'; }

?>