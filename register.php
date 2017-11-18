
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="resources/images/fork.png"/>
	<title>Tasty Recipes | Register</title>
	<link rel="StyleSheet"
	type="text/css"
	href="resources/css/login.css"/>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>
<body>
	<header>
		<?php include "resources/fragments/header.php" ?>
	</header>
	<div class="row">
		<form action="register.php" method="POST">
				<h1 class="regi">Sign Up Here!</h1>
				<div class="container">
					<input type="text" placeholder="Enter Username" name="username" required>
					<input type="password" placeholder="Enter Password" name="password" required>
					<button type="submit" name="login">Register</button>
				</div>
		</form>
	</div>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$bool = true;

	$con = mysqli_connect("localhost","root","") or die(mysqli_error());
	mysqli_select_db($con, "first_db") or die("Cannot connect to database");
	$query = mysqli_query($con, "Select * from users");
	while ($row = mysqli_fetch_array($query)) {

		$tables_users = $row['username'];
		if($username == $tables_users){
			$bool = false;
			Print '<script>alert("Username has been taken!");</script>';
			Print '<script>window.location.assign("register.php");</script>';
		}
	}
	if($bool){
		mysqli_query($con, "INSERT INTO users (username,password) VALUES ('$username', '$password')");
		$_SESSION['user'] = $username;
		Print '<script>alert("Succesfully Registered!");</script>';
		Print '<script>window.location.assign("index.php");</script>';
	}
}
?>