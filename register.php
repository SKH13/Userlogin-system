<?php

session_start();

header('location:login.php');

$con = mysqli_connect('localhost','root','');


mysqli_select_db($con, 'skh9');

$name = $_POST['user'];
$mail = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "User Name Already Taken";
}else{
	$reg = "insert into usertable(name, email, password, password2) values ('$name', '$mail', '$password', '$password2')";
	mysqli_query($con, $reg);
	echo "SUCCESSFUL";
}


?>