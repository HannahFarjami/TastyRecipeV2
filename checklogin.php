<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$con = mysqli_connect("localhost","root","") or die(mysqli_error());
	mysqli_select_db($con,"first_db") or die("Cannot connect to database");
	$query = mysqli_query($con,"SELECT * from users WHERE username = '$username'");
	$exists = mysqli_num_rows($query);
	$table_users = "";
	$table_password = "";
	if($exists > 0) {
		while ($row = mysqli_fetch_assoc($query)) {

			$table_users = $row['username'];
			$table_password = $row['password'];

		}
		if(($username == $table_users) && ($password == $table_password)) {
			if($password == $table_password) {
				$_SESSION['user'] = $username;
				header("location: index.php");
			}
		}
		else {
			Print '<script>alert("Incorrect Password!");</script>';
			Print '<script>location.assign("login.php");</script>';
		}
	}
	else {
		Print '<script>alert("Incorrect Username!");</script>';
		Print '<script>location.assign("login.php");</script>';
	}
?>