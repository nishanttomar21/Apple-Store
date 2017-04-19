<?php

$property_id=$_POST['property_id'];
$conn = mysqli_connect("localhost","root","","dbms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a=" SELECT * FROM description WHERE property_id='$property_id' ";
$result = $conn->query($a);
if(mysqli_num_rows($result)==0)
{
 	header("Location: /description.html");
   echo 'invalid entry';
}
else
{
  if(mysqli_num_rows($result) > 0)
$row = mysqli_fetch_assoc($result);
}
?>
<html>
<h1> THE INFORMATION IS </h1>
<h2> The ID is </h2>
<?php
echo $row["property_id"];
?>
<br><br>
<h3> Plot Number is</h3>
<?php
echo $row["plot_no"];
?>
<h4> The City Is </h4>
<?php
echo $row["city"];
?>
<h5> Your Property type to be sold is</h5>
<?php
echo $row["property_type"];
?>

</html>
