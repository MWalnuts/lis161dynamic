<?php include "server.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

	<div class="header">
		<h1 align="center">Login</h1>
	</div>
	
	<form method="post" action="login.php">
		<!-- Alert for User Registration-->
  <?php if (isset($_SESSION['warning'])) { ?>
  <div class="error">
    <?php echo $_SESSION['warning']; 
          unset($_SESSION['warning']);
    ?>
  </div>
  <?php } ?>
			<?php include "errors.php"; ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>

</body>
</html>