<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Open Source Projects</title>
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
				<h1><a href="index.php">Open Source Projects</a></h1>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>This is Open Source Projects</h2>
				<p>A website where you can browse all the open source projects on GitHub</p>
				<p>You need to login before you can browse the projects</p>
				<p>Please log in with your Github account</p>
				<ul class="actions">
					<li>
<?php
require_once('githubConf.php');
require_once('functions.php');
if(isset($_GET['code']))
{
    $fields = array( 'client_id'=>clientID, 'client_secret'=>clientSecret, 'code'=>$_GET['code']);
    $postvars = '';
    foreach($fields as $key=>$value) {
        $postvars .= $key . "=" . $value . "&";
    }
    
    $data = array('url' => 'https://github.com/login/oauth/access_token',
                  'data' => $postvars,
                  'header' => array("Content-Type: application/x-www-form-urlencoded","Accept: application/json"),
                  'method' => 'POST');
    
    $gitResponce = json_decode(curlRequest($data));
    
    if($gitResponce->access_token)
    {
        $data = array('url' => 'https://api.github.com/user?access_token='.$gitResponce->access_token,
                      'header' => array("Content-Type: application/x-www-form-urlencoded","User-Agent: ".appName,"Accept: application/json"),
                      'method' => 'GET');
        
        $gitUser = json_decode(curlRequest($data));
        
        header("Location: hello.php");
        
    }
    else
    {
        echo "Some error occured try again";
    }
}
else
{
    echo '<a href="https://github.com/login/oauth/authorize?scope=user:email&client_id='.clientID.'" title="Login with Github">
    <img src="GitHub-Logo.png" />
    </a>';
}
?>
						
						<!-- <a href="#" class="button big">Log in</a> -->
					</li>
				</ul>
			</section>

		

	</body>
</html>