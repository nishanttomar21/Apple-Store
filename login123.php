<?php
$uname=$_POST['user_name'];
$pass=$_POST['password'];
$conn = new mysqli("localhost","root","","dbms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * from user where user_name='$uname' and password='$pass'";
$result = $conn->query($sql);

 //if(mysqli_num_rows($result) > 0)
//$row = mysqli_fetch_assoc($result);
?>
<html>
<body bgcolor="LIGHTBLUE">
<center>
<?php
if($row = $result->fetch_assoc()) 
        echo "<br><br>"."Name&nbsp;:&nbsp; " . $row["Name"]. "<br><br>"."Username&nbsp;:&nbsp;".$row["user_name"]."<br><br>"."Phone Number&nbsp;:&nbsp;".$row["phone_number"]."<br><br>"."Mode of Payment&nbsp;:&nbsp;".$row["payment_mode"];
    else
		echo "<br><br><br><br><h1>NO Match Found!!!!!!!!!!!!!!!!!!</h1>";
	?>
		
<br><br><br><br><br><br><div><button class="button5 button6" onclick="self.close();window.open('main.html')">Back!!         </button><br><br><br></div>
</body>
</html>