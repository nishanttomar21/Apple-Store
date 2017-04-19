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

$sql = "SELECT * from social ";
$result = $conn->query($sql);

   if(mysqli_num_rows($result) > 0)
$row = mysqli_fetch_assoc($results);




?>
<html>

<style>
.button {
    margin: 0px; 
    width: 280px;
    background-color:BLACK ; 
    border: 1px solid grey;
    color: white;
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
<body style= "background-image: url('social.png');">
 
<div class="photos" ;width:1415px;height:1000px> 
   <center>


  
</div>


<div align="center" color="#505050"><br><br><br>
<font color="BLACK"><h1> SOCIAL APPS</h1> </font>


<br>
<button class="button button1" onclick="self.close();window.open('twitter.php')">Twitter</button><br>
<button class="button button1" onclick="self.close();window.open('skype.php')">Skype</button><br>
<button class="button button1" onclick="self.close();window.open('true.php')">Truecaller</button><br>
<button class="button button1" onclick="self.close();window.open('whatsapp.php')">Whatsapp Messenger</button><br>
<button class="button button1" onclick="self.close();window.open('hike.php')">Hike Messenger</button><br>
<button class="button button1" onclick="self.close();window.open('tumblr.php')">Tumblr</button><br>
<button class="button button1" onclick="self.close();window.open('snapchat.php')">Snapchat</button><br>
<button class="button button1" onclick="self.close();window.open('instgram.php')">Instagram</button><br>
<button class="button button1" onclick="self.close();window.open('facebook.php')">Facebook</button><br>
<button class="button button1" onclick="self.close();window.open('youtube.php')">Youtube </button><br>
</div><BR>
<body style= background-image: url('qaz4.jpg'); background-repeat: no-repeat;color:"cyan">

<br>
<center>

<br><br><div><button class="button5 button6" onclick="self.close();window.open('main.html')">Back!!         </button><br><br><br></div>
</center>

<br><br><br><br>
</html>





