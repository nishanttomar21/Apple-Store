<?php
$bid=$_POST['bid'];
$bname=$_POST['bname'];
$property_id=$_POST['property_id'];
$pass=$_POST['password'];


$conn = new mysqli("localhost","root","","dbms");
$c = "INSERT INTO broker(bid,bname,property_id,password) VALUES('$bid','$bname','$property_id','$pass')";

if($conn->query($c) == TRUE)
{
echo 'done';
}
else
{ 
echo mysqli_error($conn);
echo 'not done'; }

?>