<?php

$property_id=$_POST['property_id'];
$pass=$_POST['password'];
$conn = mysqli_connect("localhost","root","","dbms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a=" SELECT * FROM property WHERE property_id='$property_id' and password='$pass' ";
$result = $conn->query($a);
if(mysqli_num_rows($result)==0)
{
 	header("Location: /property.html");
   echo 'invalid entry';
}
else
{
  if(mysqli_num_rows($result) > 0)
$row = mysqli_fetch_assoc($result);
}
?>
<html>
<body style=" background-image: url('qaz5.jpg'); background-repeat: no-repeat;color:#8A2BE2">
<center><h1> THE INFORMATION IS </h1>
<h2> The Property ID is </h2>
<?php
echo $row["property_id"];
?>
<br><br>
<h3> The Area is for</h3>
<?php
echo $row["area"];
?>
<h4> The City is</h4>
<?php
echo $row["city"];
?>
<h4> The Value per Unit of the Property is </h4>
<?php
echo $row["per_unit_price"];
?>
<h4> <font color="white">The type of Property is </font>
</h4>
<?php
echo $row["property_type"];
?><br><strong>
<h7> No. Of Rooms is </h7>
<?php
echo $row["no_of_room"];
?></strong>
</center>
</body>
</html>