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

$sql = "SELECT * from movie ";
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
<body style= "background-image: url('movie.jpg');">
 
<div class="photos" ;width:1415px;height:1000px> 
   <center>


  
</div>


<div align="center" color="#505050"><br><br><br>
<font color="WHITE"><h1> MOVIES</h1> </font>
<br>
<button class="button button1" onclick="self.close();window.open('queen.php')">Queen</button><br>
<button class="button button1" onclick="self.close();window.open('interstellar.php')">Interstellar</button><br>
<button class="button button1" onclick="self.close();window.open('kingsman.php')">Kingsman</button><br>
<button class="button button1" onclick="self.close();window.open('american.php')">American Sniper</button><br>
<button class="button button1" onclick="self.close();window.open('dictator.php')">The Dictator </button><br>
<button class="button button1" onclick="self.close();window.open('gone.php')">Gone Girl</button><br>
<button class="button button1" onclick="self.close();window.open('fury.php')">Fury</button><br>
<button class="button button1" onclick="self.close();window.open('focus.php')">Focus</button><br>
<button class="button button1" onclick="self.close();window.open('judge.php')">The Judge</button><br>
<button class="button button1" onclick="self.close();window.open('inception.php')">Inception</button><br>
</div><BR>
<body style= background-image: url('qaz4.jpg'); background-repeat: no-repeat;color:"cyan">

<br>
<center>

<br><br><div><button class="button5 button6" onclick="self.close();window.open('main.html')">Back!!         </button><br><br><br></div>
</center>


<br><br><br><br>
</html>




