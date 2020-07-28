<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2>Login Here</h2>
			<form action="validation.php" method="post">
				<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" class="from-control" required>
				</div>
				<div class="form-group">
				<label>Password </label>
				<input type="password" name="password" class="from-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>

			</form>
			</div>

<div class="col-md-6 login-right">
	<h2>SignIn</h2>
<form method="post" action="register.php">
	
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="user" class="from-control" required></td>
     </tr>
     <tr>
           <td>Email : </td>
           <td><input type="email" name="email" class="from-control" required></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="from-control" required></td>
     </tr>
      <tr>
           <td>Password again: </td>
           <td><input type="password" name="password2" class="from-control" required></td>
     </tr>
     
	
    </table>


           <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
				
		</div>
	</div>
</div>
</body>
</html>