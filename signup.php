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


</style>

<script>
function matchString()
{

	var a,b,fname,sname,email;
	a = document.getElementById("p1").value;
	b = document.getElementById("p2").value;
	fname=document.getElementById("t1").value;
	sname=document.getElementById("t2").value;
	email=document.getElementById("t3").value;

	if( a != b )
	{	
		alert("Password Do Not Match!");
		myForm.password.focus();
		return false;
	}

	else if( fname != "" && sname != "" && email != "" && a != "" && b != "" && a == b )
		return true;

}

function myFunction() 
{

    document.getElementById("myForm").reset();

}
</script>

<style>
div {
    width: 300px;
    padding: 25px;
    border: 25px solid GREY;
    margin: 25px;
}
</style>

<form id="myForm" onsubmit = "return matchString(this)" action = "newuserhere.php" method="post">

<body background = "back1.jpg">
	<button class="button5 button6" onclick="self.close();window.open('main.html')">Back         </button><br><br><br></div>
<table border = "1" align = "centre"> 
<font color = "black">
<br>
<br>

<center><b><u><h1 color = "BLACK">Sign Up</u></h1></b>
<div>
<center>
<br>
<br>
<font size="4">
<input type="text" placeholder = "First Name" id="t1" name = "Name" required title = "Enter Your First Name">
<br>
<br>
<input type="number" placeholder = "Phone Number" id="t2" name = "phone_number" required title = "Enter Your Last Name">
<br>
<br>
<input type="email" placeholder = "Email" id="t3" name = "user_name" required title = "Enter Your Username">
<br>
<br>
<input type="password" placeholder = "Password" name = "password" id = "p1" name = "password" required >
<br>
<br>
<input type="password" placeholder = "Confirm Password" id = "p2" required >
<br>
<br>
Payment Mode <select name = "payment_mode">
<option>Select</option>
<option>Debit</option>
<option>Credit</option>
</select>
<br><br>
<input type="checkbox" name = "checkbox">I agree to the
<a href = "policy.html" target = "_blank">Terms And Policy</a>
<br>
<br>
<input type="reset" onclick = "myFunction()" value = "Reset">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value = "Sign Up!" onclick = "if( !this.form.checkbox.checked ){ alert('You must agree to the terms first.'); return false}">
<br>
<br>
</center>
</center>
</div>
</form>
</table>
</body>
</html>
