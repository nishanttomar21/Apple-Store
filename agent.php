<?php
$pass=$_POST['password'];
$aid=$_POST['aid'];
$conn = mysqli_connect("localhost","root","","dbms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a=" SELECT * FROM agent WHERE aid='$aid' and password='$pass'";
$result = $conn->query($a);
if(mysqli_num_rows($result)==0)
{
 	header("Location: /agent.html");
   echo 'invalid entry';
}
else
{
  if(mysqli_num_rows($result) > 0)
$row = mysqli_fetch_assoc($result);
}
?>
<html>
<body style=" background-image: url('qaz9.jpg'); background-repeat: no-repeat;color:black">	
<br>
<center><h1> THE INFORMATION IS </h1>
<br><h2> The ID is </h2>
<?php
echo $row["aid"];
?>
<br><br>
<h3> Name</h3>
<?php
echo $row["aname"];
?>
<h4> The Property ID is </h4>
<?php
echo $row["property_id"];
?>
</center>
<body>
</html>
