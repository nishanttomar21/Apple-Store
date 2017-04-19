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

$sql = "SELECT * from music ";
$result = $conn->query($sql);


   if(mysqli_num_rows($result) > 0)
$row = mysqli_fetch_assoc($result);




?>
<html>

<style>
.button {
    margin: 0px; 
    width: 280px;
    background-color:WHITE ; 
    border: 1px solid grey;
    color: black;
    padding: 10px 30px;
    text-align: center;
    display: inline-block;
    text-decoration: none;
    font-size: 16px;
    -webkit-transition-duration: 0.2s;
    transition-duration: 0.2s;
 }

.button1:hover {
    background-color: #663300;
    color: ORANGE;
	 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(5,0,0,0.19);
}

</style>
</head>
<body style= "background-image: url('guitar.jpg');">
 
<div class="photos" ;width:1415px;height:1000px> 
   <center>


  
</div>


<div align="center" color="#505050"><br><br><br>
<font color="WHITE"><h1> MUSIC</h1> </font>


<br>
<button class="button button1" onclick="self.close();window.open('airplanes.php')">Airplanes</button><br>
<button class="button button1" onclick="self.close();window.open('payphone.php')">Payphone</button><br>
<button class="button button1" onclick="self.close();window.open('roar.php')">Roar</button><br>
<button class="button button1" onclick="self.close();window.open('lovetheway.php')">Love the way you lie</button><br>
<button class="button button1" onclick="self.close();window.open('manma.php')">Manma Emotion Jagee</button><br>
<button class="button button1" onclick="self.close();window.open('lovestory.php')">Love story</button><br>
<button class="button button1" onclick="self.close();window.open('burn.php')">Burn</button><br>
<button class="button button1" onclick="self.close();window.open('lovemelike.php')">Love me like you do</button><br>
<button class="button button1" onclick="self.close();window.open('achatam.php')">Achatam Keshavam</button><br>
<button class="button button1" onclick="self.close();window.open('leanon.php')">Lean On</button><br>
</div><BR>
<body style= background-image: url('qaz4.jpg'); background-repeat: no-repeat;color:"cyan">

<br>
<center>
<br><br><div><button class="button5 button6" onclick="self.close();window.open('main.html')">Back!!         </button><br><br><br></div>

</center>

<br><br><br><br>
</html>





