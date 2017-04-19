<?php
$user_id=$_POST['user_id'];
$property_for=$_POST['property_for'];
$property_type=$_POST['property_type'];
$expected_cost=$_POST['expected_cost'];

$pass=$_POST['password'];
$conn = new mysqli("localhost","root","","dbms");
$c = "INSERT INTO seller(user_id,property_for,property_type,expected_cost,password) VALUES('$user_id','$property_for','$property_type','$expected_cost','$pass')";

if($conn->query($c) == TRUE)
{


echo 'done';
}
else
{ 
echo mysqli_error($conn);
echo 'not done'; }

?>