<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from games ";
$result = $conn->query($sql);

 //  if(mysqli_num_rows($result) > 0)
//$row = mysqli_fetch_assoc($result);




?>
<html>
<body style="background-image: url('zigzag.jpg');">
<center>
<br><br><br><br><br><br><br><font color="white">
<?php

if($row = $result->fetch_assoc())
{
	
	echo "<h1><br>"."App-Id&nbsp;:&nbsp; " . $row["app_id"]. "<br>"." Name&nbsp;:&nbsp; " . $row["name"]."<br>"."Type&nbsp;:&nbsp;".$row["type"]."<br>"."Company&nbsp;:&nbsp;".$row["company"]."<br>"."RAM&nbsp;:&nbsp;".$row["ram"]."<br>"."Total number of downloads&nbsp;:&nbsp;".$row["no_of_downloads"]."<br>"."Size&nbsp;:&nbsp;".$row["size"]."<br>"."Price&nbsp;:&nbsp;".$row["price"]."<br>"."Rating&nbsp;:&nbsp;".$row["app_rating"];
}
?>

<br><br><br><br><br><br><div><button class="button5 button6" onclick="self.close();window.open('bquerygames.php')">Back!!         </button><br><br><br><button class="button5 button6" onclick="self.close();window.open('comnt.php')">Review!!></div>

</center>
</body>
</html>
