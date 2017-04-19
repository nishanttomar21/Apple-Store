<?php
session_start();
$pass=$_POST['password'];
$user_id=$_POST['user_id'];
$conn = mysqli_connect("localhost","root","","dbms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a=" SELECT * FROM buyer WHERE user_id='$user_id' and password='$pass' ";
$result = $conn->query($a);
if(mysqli_num_rows($result)==0)
{
 	header("Location: /buyer.html");
   echo 'invalid entry';
}
else
{
  if(mysqli_num_rows($result) > 0)
$row = mysqli_fetch_assoc($result);
}
?>
<html>
<body style=" background-image: url('qwe7.jpg'); background-repeat: no-repeat;color:red  ">
<center><h1> THE INFORMATION IS </h1>
<h2> Your ID is </h2>
<?php
echo $row["user_id"];
?>
<br><br>
<h3> All You Want Is</h3>
<?php
echo $row["property_type"];
$_SESSION["p"]=$row["property_type"];
?>
<h4> Your Max Budget is</h4>
<?php
echo $row["max_budget"];
?>
<h5> Your area of interest is</h5>
<?php
echo $row["area"];
?>
<h1> CLICK TO SEE THE SELLERS OF THIS TYPE OF PROPERTY </h1>
<button style="background-color:black;color:white;height:3em;width:16em; transition: .5s ease; top: 550px; left: 920px;" type="button" onclick="self.close();window.open('squery.php')"/>  

SELLERS
 </button>

<h1>PROPERTY DETAILS FOR THE TYPE OF PROPERTY </h1>
<button style="background-color:black;color:white;height:3em;width:16em; transition: .5s ease; top: 650px; left: 920px;" type="button" onclick="self.close();window.open('dquery.php')"/>  
PROPERTY DESCRIPTION
 </button>

</html>
