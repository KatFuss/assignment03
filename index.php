<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Assignment 3: Information Architecture</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>

	<body>

		<div id="left"></div>
		<div id="right"></div>
		<div id="top"></div>
		<div id="bottom"></div>

		<header class="center">
			<a href="index.php">
				<h1>Team Quito</h1>
				<img src="images/s_quito.jpg" alt="Quito, Ecuador">
			</a>
		</header>

		<nav>
			<ul>
				<!--<li><a href="index.php" class="menu"> Home</a></li>-->
				<li><div class="wrapper">
					<a href="index.php" class="menu"><img src="images/home.png" alt="Home" class="hover"><p class="text">Home</p></a>
				</div></li>

				<li><div class="wrapper">
					<a href="ana-acuna.php"><img src="images/a_logo.png" alt="Ana Acuña" class="hover"><p class="text">Ana Acuña</p></a>
				</div></li>

				<li><div class="wrapper">
					<a href="andrew-thankson.php"><img src="images/an_logo.png" alt="Andrew Thankson" class="hover"><p class="text">Andrew Thankson</p></a>
				</div></li>

				<li><div class="wrapper">
					<a href="dominique-dorvil.php"><img src="images/d_logo.png" alt="Dominique Dorvil" class="hover"><p class="text">Dominique Dorvil</p></a>
				</div></li>
			</ul>
		</nav>

		<main>
			<p>Hello World! We are Team Quito. Jennifer Ngene is our Informational Architect, Clara Martinez Rubio is our Visual Designer, and Kat Fuss is our Technical Coder.</p>

			<p>With this website, we hope to give the viewers an in-depth look at some of the students that go to the University of Rochester. Rochester prides itself for its inclusion of undergraduates and graduates of different cultural backgrounds. You'll get to learn more about their journeys to the university and their humble beginnings from where they grew up as well as their future plans. Click on their links to learn more!</p>
		</main>

<?php include "inc/footer.inc"; ?>