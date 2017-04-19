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

$sql = "SELECT * from movie where app_id=1006";
$result = $conn->query($sql);

  // if(mysqli_num_rows($result) > 0)
//$row = mysqli_fetch_assoc($result);

?>
<html>
<body style="background-image: url('gonegirl.jpg');">
<center>
<br><br><br><br><br><br><br><font color="red">
<?PHP
if($row = $result->fetch_assoc())
 {
        echo "<h1><br>"."App-Id: " . $row["app_id"]. "<br>"." Name: " . $row["name"]."<br>"."Duration".$row["duration"]."<br>"."Quality:".$row["quality"]."<br>"."Genre:".$row["genre"]."<br>"."Total number of downloads:".$row["no_of_downloads"]."<br>"."Price:".$row["price"]."<br>"."Rating:".$row["app_rating"];
    }
?>

<br><br><br><br><br><br><div><button class="button5 button6" onclick="self.close();window.open('bquerybook.php')">Back!!         </button><br><br><br><button class="button5 button6" onclick="self.close();window.open('comnt.php')">Review!!></div>

</center>
</body>
</html>
