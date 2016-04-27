<?php
session_start();
?>
<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<?php
	$d1 = "Facebook";
	$d2 = "FreeCodeCamp";
	$d3 = "Vurtun";
	$d4 = "Google";
	$d5 = "Microsoft";
	$d6 = "IBM";
?>
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
		<script type="text/javascript" src="js/jquery.watermark.js"></script>
		<script type="text/javascript">
 
 
      $(document).ready(function() {

$("#faq_search_input").watermark("Begin Typing to Search");

$("#faq_search_input").keyup(function()
{
var faq_search_input = $(this).val();
var dataString = 'keyword='+ faq_search_input;
if(faq_search_input.length>3)

{
$.ajax({
type: "GET",
url: "username-search.php",
data: dataString,
beforeSend:  function() {

$('input#faq_search_input').addClass('loading');

},
success: function(server_response)
{

$('#searchresultdata').html(server_response).show();
$('span#faq_category_title').html(faq_search_input);

if ($('input#faq_search_input').hasClass("loading")) {
 $("input#faq_search_input").removeClass("loading");
        } 

}
});
}return false;
});
});
	  
</script>
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
						<h2>View all projects here</h2>
						<p>Projects</p>
							<div class="6u 12u$(xsmall)">
								<div id="prod-content">
      
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="prod-content-bottom"> </div>
  </div>
							</div>
					</header>

					
					<div class="6u 12u$(small)">
						<ul class="actions fit">
							<?php
								$urlLink1="welcome.php?".$d4;
								$urlLink2="welcome.php?".$d5;
								$urlLink3="welcome.php?".$d6;

								$urlLink4="welcome.php?".$d1;
								$urlLink5="welcome.php?".$d2;
								$urlLink6="welcome.php?".$d3;
							?>
							<li><a href='<?php echo $urlLink1 ?>' class="button alt fit"><?php $_SESSION['username'] = $d4; echo $d4?></a></li>
							<li><a href="<?php echo $urlLink2 ?>" class="button alt fit"><?php $_SESSION['username'] = $d5; echo $d5?></a></li>
							<li><a href='<?php echo $urlLink3 ?>' class="button alt fit"><?php $_SESSION['username'] = $d6; echo $d6?></a></li>
				
						</ul>			
					</div>
					
					<div class="6u 12u$(small)">
						<ul class="actions fit">
							<li><a href="<?php echo $urlLink4 ?>" class="button alt fit"><?php $_SESSION['username'] = $d1; echo $d1?></a></li>
							<li><a href="<?php echo $urlLink5 ?>" class="button alt fit"><?php $_SESSION['username'] = $d2; echo $d2?></a></li>
							<li><a href="<?php echo $urlLink6 ?>" class="button alt fit"><?php $_SESSION['username'] = $d3; echo $d3?></a></li>
				
						</ul>
					</div>

					<div class="6u 12u(small)">

									<h4>Search by:</h4>
									<ul>

										<li><a href ='view-username.php'>Developer</a></li>

									</ul>

					</div>

									
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Lorem ipsum</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, cumque!</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Quod adipisci perferendis et itaque.</a></li>
								<li><a href="#">Itaque eveniet ullam, veritatis reiciendis?</a></li>
								<li><a href="#">Accusantium repellat accusamus a, soluta.</a></li>
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Nostrum, repellat!</h3>
							<p>Tenetur voluptate exercitationem eius tempora! Obcaecati suscipit, soluta earum blanditiis.</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Id inventore, qui necessitatibus sunt.</a></li>
								<li><a href="#">Deleniti eum odit nostrum eveniet.</a></li>
								<li><a href="#">Illum consectetur quibusdam eos corporis.</a></li>
							</ul>
						</section>
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									1234 Somewhere Road<br>
									Nashville, TN 00000
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">someone@untitled.tld</a>
								</li>
								<li>
									<h3>Phone</h3>
									(000) 000-0000
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>
