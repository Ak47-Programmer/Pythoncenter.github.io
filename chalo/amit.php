<?php 
  
header('location:training.html');

session_start();
$con = mysqli_connect('localhost','root');
if ($con)
 {
 	echo "connected";
	
}
else
{
	echo "not connected";
}

mysqli_select_db($con,'amit');

$name = $_POST['users'];
$pass = $_POST['psw'];

$query = " select * from kumar where name = '$name' && password = '$pass' ";

$result = mysqli_query($con,$query);

$num = mysqli_num_rows($result);

if ($num==$name) 
{
	echo "This E-mail Id is already Exists Try with another E-mail Id . . . . . ";
	
}
else
{
	$qy = "insert into kumar(name , password) values('$name' , '$pass')";
	mysqli_query($con,$qy);
}














 ?>