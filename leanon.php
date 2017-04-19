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

$sql = "SELECT * from music where app_id=1010";
$result = $conn->query($sql);

  // if(mysqli_num_rows($result) > 0)
//$row = mysqli_fetch_assoc($result);

?>
<html>
<body style="background-image: url('lean on.jpg');">
<center>
<br><br><br>
<a href = "38.mp3"><h1>Download</h1></a><br><br><br><font color="white">
<?php
if($row = $result->fetch_assoc()) {
        echo "<h1><br>"."App-Id: " . $row["app_id"]. "<br><br>"." Name: " . $row["name"]."<br><br>"."Duration:".$row["duration"]."<br><br>"."Quality:".$row["quality"]."<br><br>"."Genre".$row["genre"]."<br><br>"."Total number of downloads:".$row["no_of_downloads"]."<br><br>"."Size:".$row["size"]."<br><br>"."Price:".$row["price"]."<br><br>"."Rating:".$row["app_rating"]."</h1>";
    }
?>

<br><br><br><br><br><br><div><button class="button5 button6" onclick="self.close();window.open('bquerymusic.php')">Back!!         </button><br><br><br><button class="button5 button6" onclick="self.close();window.open('comnt.php')">Review!!></div></center>
</body>
</html>
