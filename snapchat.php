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

$sql = "SELECT * from social where app_id=1007";
$result = $conn->query($sql);

  // if(mysqli_num_rows($result) > 0)
//$row = mysqli_fetch_assoc($result);

?>
<html>
<body style="background-image: url('snapchat-512.png');">
<center>
<br><br><br><br><br><br><br><font color="black">
<?php
if($row = $result->fetch_assoc()) {
        echo "<br>"."App-Id: " . $row["app_id"]. "<br>"." Name: " . $row["name"]."<br>"."Catagories:".$row["catagories"]."<br>"."Total number of downloads:".$row["no_of_downloads"]."<br>"."Size:".$row["size"]."<br>"."Price:".$row["price"]."<br>"."Rating:".$row["app_rating"];
    }
?>
<br><br><br><br><br><br><div><button class="button5 button6" onclick="self.close();window.open('bquerysocial.php')">Back!!         </button><br><br><br></div>
</center>
</body>
</html>
