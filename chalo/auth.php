<?php 
  


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

if ($num==1) 
{
	$_SESSION['username'] = $name;
	header('location:google.com');
	
}
else
{
	header('location:training.html');

}














 ?>