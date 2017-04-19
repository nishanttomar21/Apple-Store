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

$sql = "SELECT user_id,expected_cost from seller where property_type='$property_type' ";
$result = $conn->query($sql);
if(mysqli_num_rows($result)==0)
{echo $_SESSION["p"];
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
<body style=" background-image: url('qaz1.jpg'); background-repeat: no-repeat;color:black">
<center><br><h1> THE INFORMATION IS </h1><br>

<font color="white"><?php
while($row = $result->fetch_assoc()) {
			echo "<br>"."Id: " . $row["user_id"]. "<br>"." Cost Expected: " . $row["expected_cost"] ;
    }
?>
<br><br>

<br><br><br><br>
<form action="buyer.php" method="post">
<input type="submit" value="BACK" name="BACK">
</form>
</body>
</html>


