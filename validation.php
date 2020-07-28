<?php

session_start();

$con = mysqli_connect('localhost','root','');
if($con){
	echo" connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'skh9');

$name = $_POST['user'];
$mail = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$s = "select * from usertable where name = '$name' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	header('location:home.php');
}else{
	header('location:login.php');
}


?>