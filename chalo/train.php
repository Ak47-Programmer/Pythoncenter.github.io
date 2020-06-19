<?php

session_start();



?>






<!DOCTYPE html>
<html>
<head>
	<title>My Trends</title>
	<link rel="stylesheet" type="text/css"
	 href="pikut.css">
</head>
<body>

	<main>
		<div class="logo">
			<h2>AmitTrend Store</h2>
		</div>
		<nav>
	
			<ul>
				<li><a href="#" class="active">Home</a>
				</li>
				<li><a href="#">Services</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Trends</a></li>
				<li><a href="#">Get Hire</a></li>
                <li><a href="Log.php">LogOut</a></li>
			</ul>
		</nav>
	</main>
<h1 id="tr"> The Best Giveway Ever By Amit</h1>

	<div class="kina">
	<div class="nh">
		<div class="crot">
			<img src="67-removebg-preview.png">
			<h2>Iphone XR Giveway By Amit</h2>
		</div>
		<p>Just Simply You want to SignUp to Get Your Gift. Hurry Up only Limited Stocks are Available Just add to card and then Signup..</p>
		<button type="submit">Add to Cart</button>
	</div>
<div class="trko">
<form action="amit.php" onsubmit="return Validation()" method="post" name="now">
  
    <h1>Sign Up</h1>
  

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="users" required id="use">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required id="psw">

    <label for="psw-repeat"><b>Repeat Password</b>
    </label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat">

    <label>
      <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    

   
      <button type="submit" class="signupbtn">Sign Up
      </button>
    
  
</form>

</div>
<div class="trko">
<form action="amit.php" onsubmit="return Validation()" method="post" name="now">
  
    <h1>Sign Up</h1>
  

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="users" required id="use">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required id="psw">

    <label for="psw-repeat"><b>Repeat Password</b>
    </label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat">

    <label>
      <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    

   
      <button type="submit" class="signupbtn">Sign Up
      </button>
    
  
</form>

</div>



	</div>

	

<script>  
            function validation()  
            {  
                var id=document.now.users.value;  
                var ps=document.now.psw.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  

	
	
	


</body>
</html>