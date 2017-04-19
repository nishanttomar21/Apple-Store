<?php
$aid=$_POST['aid'];
$aname=$_POST['aname'];
$property_id=$_POST['property_id'];
$pass=$_POST['password'];
$conn = new mysqli("localhost","root","","dbms");
$c = "INSERT INTO agent(aid,aname,property_id,password) VALUES('$aid','$aname','$property_id','$pass')";
if($conn->query($c) == TRUE)
{


echo 'done';
}
else
{ 
echo mysqli_error($conn);
echo 'not done'; }


?>