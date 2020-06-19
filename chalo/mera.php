<?php 


$random=substr(rand(),0,4);


 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Amit Techz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://localhost/chalo/khul.css">
</head>
<body>


	<div class="image">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
			<div class="container">
				<a href="https://forloop4.blogspot.com/" class="navbar-brand text-warning font-weight-bold">Amit's Programming Center</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-center" id="collapsenavbar">
				<ul class="navbar-nav ml-auto ">
				<li class="nav-item">
					<a href="https://forloop4.blogspot.com/" class="nav-link">
						Home
					</a></li>
					<li class="nav-item">
					<a href="https://forloop4.blogspot.com/" class="nav-link">
						Services
					</a></li>
					<li class="nav-item">
					<a href="https://forloop4.blogspot.com/" class="nav-link">
						About Us
					</a></li>
					<li class="nav-item">
					<a href="https://forloop4.blogspot.com/" class="nav-link">
						Contact Us
					</a></li>
					
					

				
</ul>
</div>
			

			</div>
			
		</nav>
		<div class="mera"><em><h2>This Website Created By Amit Only For Study Purposes Only :) </h2></em></div>
	</div>
	
		
		


	<div class="tera">
	<form class="back" action="register.php" method="post"  name="form1">
	
		<label for="first"><b>Username:</b></label><br><br>
		<input type="text" name="user" id="first" required autocomplete="off"><br><br>
		<label for="second"><b>Password:</b></label><br><br>
		<input type="password" name="pass" id="second" required><br><br>
		<label for="secy"><b> Re-Type-Password:</b></label><br><br>
		<input type="password" name="pass" id="secy" required><br><br><input type="checkbox" onclick="myFunction()">Show Password<br><br>
		<label for="fir"><b>Gender: </b></label>
		<b>Male: </b><input type="radio" name="gender" value="Male" id="fir" required><b>Female: </b><input type="radio" name="gender" value="Female" id="first" required><br><br>
		<label><b>Captcha Code: </b></label>
	<input name="chk" type="text" id="captcha" value="<?=$random?>" readonly="readonly"> ><br/><br/><label><b>Enter Code:  </b></label>
<input type="text" id="inputText" autocomplete="off"><br/><br/>
<button onclick="captch()">Refresh Captcha</button>



<input type="submit" name="check" onsubmit="return validation()" ><!-- SignUp</button><br><br>
 -->

<div class="your">
	<h4>Do you Have Already Account Login Here..<a href="Login.html">Login Now</a></h4>
</div>

	</form>

	
	</div>

	
  <script type="text/javascript">

  function myFunction()
  {
  	var x = document.getElementById("second");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  }
 
function validation()
{
 
if(document.form1.user.value=="")
{
document.getElementById("first").innerHTML="Enter your Name!";
// document.form1.name.focus();
return false;
}
 
if(document.form1.chk.value=="")
{
document.getElementById("captcha").innerHTML="Enter Captcha!";
// document.form1.chk.focus();
return false;
}
 
 
if(document.form1.inputText.value!=document.form1.captcha.value)
{
	alert("Wrong Captcha");
// document.getElementById("error").innerHTML="Captcha Not Matched!";
// document.form1.chk.focus();
return false;
}
return true;
}

function captch() {
    var x = document.getElementById("captcha")
    x.value = Math.floor((Math.random() * 10000) + 1);
}

</script>










  
</body>
</html>