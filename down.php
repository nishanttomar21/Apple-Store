<?php
$uname=$_POST['user_name'];
$apid=$_POST['app_id'];
$comnt=$_POST['comments'];
$rat=$_POST['rating'];
$name=$_POST['app_name'];

$conn = new mysqli("localhost","root","","dbms");
$c = "INSERT INTO comments(app_id,user_name,comments,rating,app_name) VALUES('$apid','$uname','$comnt','$rat','$name')" ;
if($conn->query($c) == TRUE)
{
echo 'done';

//echo '<h1> WELCOME!!!!!!!!!!!</h1>';
}
else
{ 
echo mysqli_error($conn);
echo 'not done'; }


?>
