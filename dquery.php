<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms";

// Create connection
$property_type=$_SESSION["p"];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from property where property_type='$property_type' ";
$result = $conn->query($sql);
if(mysqli_num_rows($result)==0)
{
	echo $_SESSION["p"];
 	//header("Location: /index.html");
   echo 'invalid entry';
}
else
{
   if(mysqli_num_rows($result) > 0)
$row = mysqli_fetch_assoc($result);

}


?>

<html>
<body style=" background-image: url('qaz3.jpg'); background-repeat: no-repeat;color:black">
<center>
<h1> THE INFORMATION IS </h1>
<h4> PROPERTY ID is </h4>
<?php
echo $row["property_id"];

$_SESSION["t"]=$row["property_id"];
?>
<br><br>
<html>
<h4> PER UNIT PRICE IS </h4>
<?php
echo $row["per_unit_price"];
?>
<br><br>
<h4> AREA IS </h4>
<?php
echo $row["area"];
?>
<br><br>
<h4> CITY IS </h4>
<?php
echo $row["city"];
?>
<br><br>
<h1> BROKER DETAILS FOR THE TYPE OF PROPERTY </h1>
<button style="background-color:black;color:white;height:3em;width:16em; transition: .5s ease; top: 550px; left: 920px;" type="button" onclick="self.close();window.open('bquery.php')"/>  
BROKERS
 </button>


<br><br><br><br>
<form action="buyer.php" method="post">
<input type="submit" value="BACK" name="BACK">
</form>
</center>
</body>
</html>


