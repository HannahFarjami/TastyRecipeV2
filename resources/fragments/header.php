<!-- This is the header and navigation bar(menu) -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
		  <link rel="StyleSheet"
  type="text/css"
  href="resources/css/menu.css"/>
</head>

<?php 
	session_start();
	if(isset($_SESSION['user'])) {
		$logout = "<a href='logout.php'>Logout</a>";
		$user = "<a href='#' id='wel'>Welcome" . " ". $_SESSION['user']."!</a>";
		$regi="";
	}
	else {
		$user = "<a href='login.php'>Login</a>";
		$regi = "<a href='register.php'>Sign Up</a>";
		$logout = "";
	}
	
?>

<body>
	<div class="topheader">
		<a href="index.php">
			<img src="resources/images/fork.png" alt="fork">
			<h1>Tasty Recipes</h1>
		</a>
	</div>
	<div  class="navigation_bar">
		<ul>
			<li><a class="active" href="index.php">Home</a></li>
			<li><a href="#">Recipes</a>
				<ul>
					<li></li>
					<li><a href="meatballrecipe.php">Meatballs</a></li>
					<li><a href="pancakes.php">Pancakes</a></li>
				</ul>
				<li><a href="calender.php">Calendar</a></li>
				<li id="logout"><?php echo $logout ?></li>
				<li id="login"><?php echo $regi ?></li>
				<li id="login"><?php echo $user ?></li>
			</ul>
		</div>
	</body>
	</html>