<html>

<style>

.button5 {
    margin: 5px; 
    width: 90px;
  height:40px;
    background-color: grey; 
    
    color: white;
    padding: 10px 25px;
    float:left;
    display: inline-block;
    text-decoration: none;
    font-size: 16px;
 }     
.button6:hover {
    background-color: white;
    color: black;
    
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(5,0,0,0.19);
}
<script>
function myFunction() 
{

    document.getElementById("myForm").reset();

}
</script>
</style>



<style>
div {
    width: 300px;
    padding: 25px;
    border: 25px solid GREY;
    margin: 25px;
}
</style>

<form id="myForm"  action = "comment.php" method="post">

<body background = "comments.jpg">
	<button class="button5 button6" onclick="self.close();window.open('main.html')">Back         </button><br><br><br></div>
<table border = "1" align = "centre"> 
<font color = "black">
<br>
<br>

<center><b><u><h1 color = "BLACK">Comment!!</u></h1></b>
<div>
<center>
<br>
<br>
<font size="4">
<input type="email" placeholder = "Username" id="t1" name = "user_name"  title = "Enter Your Username">
<br>
<br>
<input type="number" placeholder = "App Id" id="t2" name = "app_id"  title = "Enter Your App Id">
<br>
<br>
<input type="text" placeholder = "Comments" id="t3" name = "comments"  title = "Comment Here">
<br>
<br>
<input type="number" placeholder = "Rating" name = "rating" id = "p1"   >
<br>
<br>
<input type="text" placeholder = "App name" id = "p2" name="app_name"  >
<br>
<br>
<input type="reset" onclick = "myFunction()" value = "Reset">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value = "Review!" >
<br>
<br>
</center>
</center>
</div>
</form>
</table>
</body>
</html>
