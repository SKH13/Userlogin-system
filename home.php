<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

?>


<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<div class="container">
		<h2>WLCOME  <?php echo $_SESSION['username'];?></h2>
		<a href="logout.php">LOGOUT </a>
	</div>
</body>
</html>
