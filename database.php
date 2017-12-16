<?php
	session_start();

	//Initialize variables
	$name = "";
	$password = "";
	$email = "";
	$gender = "";
	$id = 0;
	$edit_state = false;


	//Connect to database
	$con = mysqli_connect("localhost","root","","lis161_crud");
	if (!$con) {
		echo "Connection to database unsuccessful!";
	} else {
	//	echo "Connection success!";
	}


	

	//READ Records
	$student_records = mysqli_query($con,"SELECT * FROM users"); //Query all records


	//UPDATE Record
	if (isset($_POST['update'])) {



		$name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$id = $_POST['id'];
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query);
$county = mysqli_num_rows($result);
		


		
		// Still not correct

		if ($county!=1) {
		//Prepare query statement
		$query = "UPDATE users SET 
		name='$name' ,
		password='$password' ,
		email='$email' 
		WHERE id='$id'";

		//Perform query
		mysqli_query($con,$query);
		//Set status message
		$_SESSION['message'] = "Member record successfully updated!";
		//redirect user to page
		header('location: index2.php');
	}

else {
		$_SESSION['message'] = "Email already taken!";
		header('location: index2.php');

		}
}

	//DELETE Record
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		//Prepare query statement
		$query = "DELETE FROM users WHERE id=$id";

		//Perform query
		mysqli_query($con,$query);
		//Set status message
		$_SESSION['message'] = "Member record successfully deleted!";
		//redirect user to page
		header('location: index2.php');

	}

?>