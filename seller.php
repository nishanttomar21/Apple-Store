<?php
$pass=$_POST['password'];
$user_id=$_POST['user_id'];
$conn = mysqli_connect("localhost","root","","dbms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a=" SELECT * FROM seller WHERE user_id='$user_id' and password='$pass' ";
$result = $conn->query($a);
if(mysqli_num_rows($result)==0)
{
 	header("Location: /seller.html");
   echo 'invalid entry';
}
else
{
  if(mysqli_num_rows($result) > 0)
$row = mysqli_fetch_assoc($result);
}
?>
<html>
<body style=" background-image: url('qaz6.jpg'); background-repeat: no-repeat;color:#996515">
<center><h1> THE INFORMATION IS </h1>
<h2> Your ID is </h2><strong>
<?php
echo $row["user_id"];
?></strong>
<br><br>
<h3> Your Property is for</h3><strong>
<?php
echo $row["property_for"];
?></strong>
<h4> Your Property type to be sold is</h4><strong>
<?php
echo $row["property_type"];
?></strong>
<h4> You expect an amount of </h4>
<strong>
<?php
echo $row["expected_cost"];
?></strong>

</center>

</body>
</html>
