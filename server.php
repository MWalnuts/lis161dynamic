<?php

	session_start();
	//Initialize variables
	$username = "";
	$name = "";
	$email = "";
	$password_1 = "";
	$password_2 = "";
	$password = "";
	$errors = array();

	//Connect to database
	$con = mysqli_connect("localhost","root","","lis161_crud");
	//Check if there are errors in connection
	if (!$con) {
		echo "Database connection error!";
	}

	//If register button is clicked
	if (isset($_POST['reg_user'])) {
		$username = mysqli_real_escape_string($con,$_POST['username']);
		$name = mysqli_real_escape_string($con,$_POST['name']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$password_1 = mysqli_real_escape_string($con,$_POST['password_1']);
		$password_2 = mysqli_real_escape_string($con,$_POST['password_2']);

		//Check if all fields have values
		if (empty($username)) {
			array_push($errors, "Username should not be blank");
		}
		if (empty($name)) {
			array_push($errors, "Name should not be blank");
		}
		if (empty($email)) {
			array_push($errors, "Email should not be blank");
		}
		if (empty($password_1)) {
			array_push($errors, "Password should not be blank");
		}
		if ($password_2 != $password_1) {
			array_push($errors, "Please retype password");
		}

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query);
$county = mysqli_num_rows($result);


$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);

		if ($count>0) {
		array_push($errors, "Username is already taken!");

		}
		if ($county>0) {
		array_push($errors, "Email is already taken!");
		
		}
		

		//If there is no errors in the input fields
		if (count($errors)==0) {
			$password = $password_1;
			//Prepare query statement
			$query = "INSERT INTO users(username,name,email,password)
			VALUES ('$username','$name','$email','$password')";
			//perform query
			mysqli_query($con,$query);
			//set session variables
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You have successfully registered";
			//redirect the user
			header("location: index.php");
		}
	}

	//If log-in button is clicked
	if (isset($_POST['login_user'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		//Perform basic input verification

		if (empty($username)){
			array_push($errors, "Username should not be blank!");
		}
		if (empty($password)){
			array_push($errors, "Password should not be blank!");
		}

		//if there are no errors in the input fields
		if (count($errors) == 0) {
			$password = $password; 

			//prepare query statement
			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

			//perform query
			$result = mysqli_query($con, $query);

			//check if there is a record returned by SELECT
			if (mysqli_num_rows($result) == 1) {
				//set session variables
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You have successfully logged in!";

				//redirect user
				header("location: index.php");			
			} else {
				array_push($errors, "Wrong username/password combination!!");
			}
		}
	}

	//If log-out button is clicked
	if (isset($_GET['logout'])) {
		session_destroy(); //Destroy session
		unset($_SESSION['username']); //Unset session variable
		//redirect the user
		header("location: login.php");
	}

?>