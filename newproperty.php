<html>
<?php
$property_id=$_POST['property_id'];
$area=$_POST['area'];
$city=$_POST['city'];
$pass=$_POST['password'];
$per_unit_price=$_POST['per_unit_price'];
$property_type=$_POST['property_type'];
$no_of_room=$_POST['no_of_room'];
$conn = new mysqli("localhost","root","","dbms");
$c = "INSERT INTO property(property_id,area,city,per_unit_price,property_type,no_of_room,password) VALUES('$property_id','$area','$city','$per_unit_price','$property_type','$no_of_room','$pass')";
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
<input type="button" value="Back" onclick="self.close();window.open('newproperty.html')">
</body>
</html>