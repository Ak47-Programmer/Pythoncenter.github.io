<?php

session_start();

$connection = mysqli_connect('localhost','root');

if ($connection)
 {
	echo "Connected";
}
else
{
	echo "Try Again";
}

 mysqli_select_db($connection,'amit');

$name = $_POST['user'];
$pas = $_POST['pass'];

$query = "select *from kumar where name = '$name' && password = '$pas' ";
$variable = mysqli_query($connection, $query);

$number = mysqli_num_rows($variable);

if ($number == 1) {

	$_SESSION['username'] = $name;
   header('location:training.html');


	
}
else
{
	header('location:training.html');
	
}







?>