
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="resources/images/fork.png"/>
	<title>Tasty Recipes | Login</title>
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

		<form action="checklogin.php" method="post">
			<div class ="column">
				<h1>Login</h1>
				<div class="container">
					<input type="text" placeholder="Enter Username" name="username" required>
					<input type="password" placeholder="Enter Password" name="password" required>
					<button type="submit" name="login">Login</button>
				</div>
			</div>
		</form>
			<div class ="column">
				<h1 class="signup">Sign up</h1>
				<p >Not a member? Sign up here!</p>	
				<div class="reg">
					<form action="register.php">
						<button type="submit" class="register">Sign up</button>
					</form>
					<?php //<span class="psw">Forgot <a href="#">password?</a></span> ?>
				</div>
			</div>
	</div>
</body>
</html>

