<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms";

// Create connection
$property_id=$_SESSION["t"];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from broker where property_id='$property_id' ";
$result = $conn->query($sql);
if(mysqli_num_rows($result)==0)
{
	echo $_SESSION["t"];
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
<body style=" background-image: url('qaz4.jpg'); background-repeat: no-repeat;color:cyan">
<center><br><br><br><h1> THE INFORMATION IS </h1>

<br><h4> The Brokers are </h4>

<?php
while($row = $result->fetch_assoc()) {
        echo "<br>"."Id: " . $row["bid"]. "<br>"." Name: " . $row["bname"] ;
    }
?>
<br>


<br><br><br><br>
<form action="buyer.php" method="POST">
<input type="submit" value="BACK" name="BACK">
</form>
</center>
</html>


