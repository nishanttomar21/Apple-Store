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

$sql = "SELECT * from books where app_id=1003 ";
$result = $conn->query($sql);

   //if(mysqli_num_rows($result) > 0)
//$row = mysqli_fetch_assoc($result);

?>
<html>
<body style= "background-image: url('theshiva trilogy.jpg');">
<center>
<br><br><br><br><br><br><br><font color="white">
<?php
if($row = $result->fetch_assoc())
{
	echo "<font align=CENTER>";
	echo "<h1><br>"."App-Id&nbsp;:&nbsp; " . $row["app_id"]. "<br>"." Name&nbsp;:&nbsp; " . $row["name"]."<br>"."Author&nbsp;:&nbsp;".$row["author"]."<br>"."Publisher&nbsp;:&nbsp;".$row["publisher"]."<br>"."Pages&nbsp;:&nbsp;".$row["pages"]."<br>"."Theam &nbsp;:&nbsp;".$row["theam"]."<br>"."Total number of downloads&nbsp;:&nbsp;".$row["no_of_downloads"]."<br>"."Size&nbsp;:&nbsp;".$row["size"]."<br>"."Price&nbsp;:&nbsp;".$row["price"]."<br>"."Rating&nbsp;:&nbsp;".$row["app_rating"];
}
?>

<br><br><br><br><br><br><div><button class="button5 button6" onclick="self.close();window.open('bquerybook.php')">Back!!         </button><br><br><br><button class="button5 button6" onclick="self.close();window.open('comnt.php')">Review!!></div>

</center>
</body>
</html>
