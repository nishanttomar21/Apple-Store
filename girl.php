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

$sql = "SELECT * from books where app_id=1008";
$result = $conn->query($sql);

  // if(mysqli_num_rows($result) > 0)
//$row = mysqli_fetch_assoc($result);

if($row = $result->fetch_assoc())
{
	echo "<font align=CENTER>";
	echo "<br>"."App-Id&nbsp;:&nbsp; " . $row["app_id"]. "<br>"." Name&nbsp;:&nbsp; " . $row["name"]."<br>"."Author&nbsp;:&nbsp;".$row["author"]."<br>"."Publisher&nbsp;:&nbsp;".$row["publisher"]."<br>"."Pages&nbsp;:&nbsp;".$row["pages"]."<br>"."Theam &nbsp;:&nbsp;".$row["theam"]."<br>"."Total number of downloads&nbsp;:&nbsp;".$row["no_of_downloads"]."<br>"."Size&nbsp;:&nbsp;".$row["size"]."<br>"."Price&nbsp;:&nbsp;".$row["price"]."<br>"."Rating&nbsp;:&nbsp;".$row["app_rating"];
}
?>