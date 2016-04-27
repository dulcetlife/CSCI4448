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
		<title>Favorites</title>
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

					<header class="major">
						<h2>Your Favorites</h2>
					</header>
				<div class="table-wrapper">
					<table id="favoritesTable">
						<thead>
							<tr>
								<th>Name</th>
								<th>Developer</th>
								<th>Language</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						<?php
						include_once ('database_connection.php'); //Including our DB Connection file
						// Set up DB query
						$query = "SELECT * FROM repos, favorites WHERE favorites.repo_id = repos.id;";
						//$query = "SELECT * FROM repos WHERE repos.username = 'Google';";

						$result = mysqli_query($dbc,$query);//Run the Query
						if($result){ //If query successful
						 if(mysqli_affected_rows($dbc)!=0){//and if atleast one record is found
						 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ //Display the record
						 	$repo_name = $row['repo_name'];
						 	$readme = $row['readme'];
						 	$language = $row['language'];
						 	$username = $row['username'];
						 	$_SESSION['username'] = $username;
						 	$_SESSION['language'] = $language;
						 	$_SESSION['repo_name'] = $repo_name;
						 	$_SESSION['readme'] = $readme;
						 	$URL=$_SESSION['repo_name'];
						 	$urlDisplay = '<p><a href=/temporaryStorage.php?'.$URL.' <b>'.$row['repo_name'].'</a></b> '.'</p>';
							echo '<tr>';
							echo '<td>'.'<a href='.$urlDisplay.'</td>';
							echo '<td>'.$username.'</td>';
							echo '<td>'.$language.'</td>';
							echo '<td><a href="/change-favorites.php?change=remove&repo_name='.$repo_name.'" class="button">Remove</a></td>';
							echo '</tr>';
						  }
						 } else {
							 echo '<tr><td>No Favorites!</td></tr>';
						 }
						} else {
							echo '<tr><td>Database Error</td></tr>';
						}
						?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="2"></td>
							</tr>
						</tfoot>
					</table>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>
