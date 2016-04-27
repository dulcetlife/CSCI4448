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
					$repo_name = $_SESSION['repo_name'];
					$readme = $_SESSION['readme'];
					$language = $_SESSION['language'];
					$myfile = fopen('test.txt', 'w');
					$txt = 'John Doe';
					fwrite($myfile, $txt);
					//fwrite($myfile, $readme);
					fclose($myfile);
					echo $repo_name;
					echo $language;
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