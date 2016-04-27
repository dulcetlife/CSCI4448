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
						<li><a href="favorites.php">Favorites</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<?php
					include('Parsedown.php');

					$rand = rand(1,3);
					
					if($rand == 1)
					{
						//id = 456
						$repo_name= 'droidshield';
						$readme = ' DroidShield
===========
A framework that enables you to use your android phone as a shield for hardware platforms such as Arduino, Raspberr
y Pi, Beaglebone Black and more.
The framework contains the android app, and hardware specific libraries. The communitcation happens over serial-blu
etooth or serial-usb. 
 |';
						$language = 'Java';
						$developer = 'deepakkarki';

						echo '<span><a href="/change-favorites.php?change=random&repo_name='.$repo_name.'" class="button">Add to Favorites!</a></span>';
						echo "<BR>";
						echo "Repository Name: ", $repo_name;
						echo "<BR>";
						echo "Software Language: ", $language;
						echo "<BR>";
						echo "Developer Name: ", $developer;
						echo "<BR>";
						echo "<br>";

						$Parsedown = new Parsedown();

						echo $Parsedown->text($readme);
					}
					else if($rand == 2)
					{
						//322
						$repo_name = 'gossip';
						$readme = " [![Build Status](https://travis-ci.org/petterl/gossip.png)](http://travis-ci.org/petterl/gossip)
gossip
====================
An erlanG Opensource Stack for Session Initiation Protocol
Compiling
--------------------
To compile you need [rebar](http://github.com/basho/rebar).
After installing rebar and making sure that it is in you path just type 'make' to compile gossip.
All normal rebar commands can also be used, for a list type 'rebar -c'.";
						$language = 'Erlang';
						$developer = 'petterl';
						echo '<span><a href="/change-favorites.php?change=add&repo_name='.$repo_name.'" class="button">Add to Favorites!</a></span>';
						echo "<BR>";
						echo "Repository Name: ", $repo_name;
						echo "<BR>";
						echo "Software Language: ", $language;
						echo "<BR>";
						echo "Developer Name: ", $developer;
						echo "<BR>";
						echo "<br>";

						$Parsedown = new Parsedown();

						echo $Parsedown->text($readme);
					}
					else
					{
						//1809
						$repo_name = 'misterhouse';
						$readme = "| MisterHouse
===========
Perl open source home automation program. It's fun, it's free, and it's entirely geeky.
* [Quickstart Guide](https://github.com/hollie/misterhouse/wiki/Getting-started)
* [Standard Installation Guide](http://misterhouse.sourceforge.net/install.html)
* [User Wiki](https://github.com/hollie/misterhouse/wiki)
* [User Mail List misterhouse-users](https://sourceforge.net/p/misterhouse/mailman/misterhouse-users/)
* Active Development Repository - [GitHub hollie/misterhouse](https://github.com/hollie/misterhouse)
 |";						
 						$language = 'Perl';
						$developer = 'hollie';

						echo '<span><a href="/change-favorites.php?change=add&repo_name='.$repo_name.'" class="button">Add to Favorites!</a></span>';
						echo "<BR>";
						echo "Repository Name: ", $repo_name;
						echo "<BR>";
						echo "Software Language: ", $language;
						echo "<BR>";
						echo "Developer Name: ", $developer;
						echo "<BR>";
						echo "<br>";

						$Parsedown = new Parsedown();

						echo $Parsedown->text($readme);
					}
					
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
