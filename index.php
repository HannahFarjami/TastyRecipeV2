<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="StyleSheet"
	type="text/css"
	href="resources/css/stylesheet.css"/>
	<link rel="shortcut icon" href="resources/images/fork.png"/>
	<title>Tasty Recipes | Homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<body> 
	<header>
		<?php include 'resources/fragments/header.php' ?>
	</header>
	<div class="row">
		<div class="column">
			<h1> New Recipes</h1>
			<a href="pancakes.php">
				<img id="pan" src="resources/images/pancakes.jpg" alt="Pancakes"/>
			</a>
			<p>Pancakes</p>
		</div>

		<div class="column">
			<br>
			<a href="meatballrecipe.php">
				<img id="meat" src="resources/images/meatballs.jpg" alt="Meatballs"/>
			</a>
			<p>Meatballs</p>
		</div>
		<div class="column" id ="cal">
			<h1>What's In Our Calendar?</h1>
			<a href="calender.php">
				<img src="resources/images/calender.jpg" alt="Calender"/>
			</a>
			<p><br></p>
		</div>
	</div>


</body>
</html>