<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
session_start();
if (isset($_SESSION['github_data'])) {
// Redirection to application home page.
header("location: home.php");
}
//HTML Code

?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Interphase by TEMPLATED</title>
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
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">Open source projects</a></h1>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>This is Open Source Projects</h2>
				<p>A website where you can browse all the open source projects on GitHub</p>
				<p>You need to login before you can browse the projects</p>
				<p>Please log in with your Github account</p>
				<ul class="actions">
					<li>

						<a href="github_login.php">Login with Github</a>
						<!-- <a href="#" class="button big">Log in</a> -->
					</li>
				</ul>
			</section>

		

	</body>
</html>