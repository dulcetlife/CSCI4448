<?php
session_start();
?>

<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Open Source Project</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<style>
	
	.toprighttemp
	{
	 position: relative;
     top:0;
     right:0;
	}
	
	</style>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="welcome.php">Open Source Projects</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="welcome.php">Home</a></li>
						<li><a href="generic.html">Generic</a></li>
						<li><a href="view_project.php">Elements</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<?php
					include('Parsedown.php');

					$repo_name = $_SESSION['repo_name'];
					$readme = $_SESSION['readme'];
					$language = $_SESSION['language'];
					$developer = $_SESSION['username'];
					//$myfile = fopen('test.txt', 'w');
					//$txt = 'John Doe';
					//fwrite($myfile, $txt);
					//fwrite($myfile, $readme);
					//fclose($myfile);
					
					echo '<span><a href="/change-favorites.php?change=add&repo_name='.$repo_name.'" class="button toprighttemp">Add to Favorites!</a></span>';
					echo "<br>";
					echo "<br>";
					echo "Repository Name: ", $repo_name;
					echo "<br>";
					echo "Software Language: ", $language;
					echo "<br>";
					echo "Developer Name: ", $developer;
					echo "<br>";
					echo "<br>";

					$Parsedown = new Parsedown();

					echo $Parsedown->text($readme);

					/*echo 'Raw readme file:';
					echo '<br>';
					echo '<br>';
					echo $readme;
					
					echo "Readme file contents:";
					echo '<br>';
					echo '<br>';
					echo $contents;

					echo 'Readme after parsed:';
					echo '<br>';
					echo '<br>';
					echo $Parsedown->text($readme);

					echo '<br>';
					echo 'END';

					//echo $readme;
					*/
					?>

				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							
						</section>
					</div>
					
				</div>
			</footer>

	</body>
</html>
