
<?php include "server.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body >
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">
		<?php include "errors.php";?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" placeholder="Orangensaft" name="username">
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" placeholder="Mozart" name="name">
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="email" placeholder="deutchkurz@gmail.com" name="email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" placeholder="berlinismycity" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" placeholder="berlinismycity" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already have an account? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>