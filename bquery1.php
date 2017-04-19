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

$sql = "SELECT * from books ";
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
<br><br><br><h1> THE INFORMATION IS </h1>

<br><h4> The Books are </h4>

<?php
while($row = $result->fetch_assoc()) {
        echo "<br>"."App-Id: " . $row["app_id"]. "<br>"." Name: " . $row["name"]."<br>"."Author:".$row["author"]."<br>"."Publisher:".$row["publisher"]."<br>"."Nomber of pages:".$row["pages"]."<br>"."Theam of the book:".%row["theam"]."<br>"."Total number of downloads:".$row["no_of_downloads"]."<br>"."Size:".$row["size"]."<br>"."Price:".$row["price"]."<br>"."Rating:".$row["app_rating"];
    }
?>
<br>


<br><br><br><br>
</html>


