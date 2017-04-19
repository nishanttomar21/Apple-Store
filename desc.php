<html>
<?php
$property_id=$_POST['property_id'];
$plot_no=$_POST['plot_no'];
$city=$_POST['city'];
$property_type=$_POST['property_type'];

$conn = new mysqli("localhost","root","","dbms");

$c = "INSERT INTO description(property_id,plot_no,city,property_type) VALUES('$property_id','$plot_no','$city','$property_type')";
if($conn->query($c) == TRUE)
{


echo 'done';
}
else
{ 
echo mysqli_error($conn);
echo 'not done'; }


?>

<body>
<input type="button" value="Back" onclick="self.close();window.open('Property.html')">
</body>
</html>