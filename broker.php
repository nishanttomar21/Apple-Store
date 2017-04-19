<?php
$pass=$_POST['password'];
$bid=$_POST['bid'];
$conn = mysqli_connect("localhost","root","","dbms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a=" SELECT * FROM broker WHERE bid='$bid' and password='$pass' ";
$result = $conn->query($a);
if(mysqli_num_rows($result)==0)
{
 	header("Location: /broker.html");
   echo 'invalid entry';
}
else
{
  if(mysqli_num_rows($result) > 0)
$row = mysqli_fetch_assoc($result);
}
?>
<html>
<body style=" background-image: url('qaz8.jpg'); background-repeat: no-repeat;color:#FFDEAD">
<center><br><h1> THE INFORMATION IS </h1><br>
<h2> The ID is </h2>
<strong><?php
echo $row["bid"];
?></strong>
<br><br>
<h3> Name</h3><strong>
<?php
echo $row["bname"];
?></strong>
<h4> The Property ID is </h4><strong>
<?php
echo $row["property_id"];
?></strong>

</center>
</body>
</html>
