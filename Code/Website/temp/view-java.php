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
url: "java-search.php",
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
						<li><a href="view_project.php">Generic</a></li>
						<li><a href="elements.php">Elements</a></li>
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
      <div class="prod-subsubhead">
      	<central>
        <h4 id="faq_title"> <strong>Search Results For : </strong> <span id="faq_category_title">Keyword </span> </h4>
        <div class="prodtopline" style="border-bottom :1px solid #EDEDED;height:30px;width:900px;margin:0px auto;border-color:#333;"> </div>
      </div>
      <div class="prod-subcontent">
        <div class="prod-lcol fl-left">
          <div class="prod-content">
            <div class="faqsearch">
              <div class="faqsearchinputbox">
                <!-- The Searchbox Starts Here  -->
                <input  name="query" type="text" id="faq_search_input" />
                <!-- The Searchbox Ends  Here  -->
              </div>
            </div>
            <div id="searchresultdata" class="faq-articles"> </div>
          </div>
        </div>
    </center>
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="prod-content-bottom"> </div>
  </div>
							</div>
					</header>

					
					<div class="6u 12u$(small)">
						<ul class="actions fit">
							<li><a href="#" class="button alt fit">Python</a></li>
							<li><a href="#" class="button alt fit">Javascript</a></li>
							<li><a href="#" class="button alt fit">C++</a></li>
				
						</ul>

						
								
					</div>

					<div class="6u 12u$(small)">
						<ul class="actions fit">
							<li><a href="#" class="button alt fit">Java</a></li>
							<li><a href="#" class="button alt fit">Ruby</a></li>
							<li><a href="#" class="button alt fit">C</a></li>
				
						</ul>
					</div>

					<div class="6u 12u(small)">

									<h4>Search by:</h4>
									<ul>
										<li><a href ='#'>Language</a></li>
										<li><a href ='view-username.php'>Developer</a></li>
										<li><a href ='#'>Date</a></li>
										<li><a href ='#'>Stars</a></li>
										<li><a href ='view-watchers.php'>Watchers</a></li>
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