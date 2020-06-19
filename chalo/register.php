<?php

session_start();
echo "Successful SignUp";
header('location:Login.html');

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
$gend = $_POST['gender'];
$Feed = $_POST['Feedback'];

$query = "select *from kumar where name = '$name' && password = '$pas' ";
$variable = mysqli_query($connection, $query);

$number = mysqli_num_rows($variable);

if ($number == 1) {

	echo "Already Exists......";
	
}
else
{
	$insert = "insert into kumar(name , password , gender , text) values ('$name' , '$pas' , '$gend' , '$Feed') ";
	mysqli_query($connection, $insert);
}







?>