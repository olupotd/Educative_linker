<!DOCTYPE html>
<?php
session_start ();
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>About Owland</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/sl-slide.css">

<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

	<!--Header-->
	<header class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a> <a id="logo" class="pull-left" href="index.php"></a>
				<div class="nav-collapse collapse pull-right">
					<ul class="nav">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="about-us.php">About Us</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="contact-us.php">Contact</a></li>
						<?php
						if ($_SESSION ['LOGGED'] == TRUE) {
							echo "<li><a href=\"faq.php\">FAQ</a></li>";
							echo "<li><a href=\"app_manager.php_logout=true\">Logout</a></li>";
						} else {
							
							echo "<li class=\"login\"><a data-toggle=\"modal\" href=\"#loginForm\">Login <i class=\"icon-lock\"></i></a></li>";
						}
						?>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</header>
	<!-- /header -->

	<section class="title">
		<div class="container">
			<div class="row-fluid">
				<div class="span6">
					<h1>About Owland</h1>
				</div>
				<div class="span4 pull-right">
					<form>
						<input type="text" class="input-block-level pull-right"
							placeholder="Search" size=20>
					</form>

				</div>
			</div>
		</div>
	</section>
	<!-- / .title -->

	<section id="about-us" class="container main">
		<div class="row-fluid">
			<?php include_once 'side_pane.php';?>
						
			<div class="span9">
				<div class="blog">
					<div class="blog-item">
						<div class="span6 well">
							<h3>Why Choose Us?</h3>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean
								sollicitudin, lorem quis bibendum auctor, nisi elit consequat
								ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
								nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
								velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed
								non mauris vitae erat consequat auctor eu in elit. Class aptent
								taciti sociosqu ad litora torquent per conubia nostra, per
								inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu
								felis dapibus condimentum sit amet a augue. Sed non neque elit.
								Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam
								pharetra, erat sed fermentum feugiat, velit mauris egestas quam,
								ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
						</div>
						<div class="span6 well">
							<h3>Our Services</h3>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean
								sollicitudin, lorem quis bibendum auctor, nisi elit consequat
								ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
								nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
								velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed
								non mauris vitae erat consequat auctor eu in elit. Class aptent
								taciti sociosqu ad litora torquent per conubia nostra, per
								inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu
								felis dapibus condimentum sit amet a augue. Sed non neque elit.
								Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam
								pharetra, erat sed fermentum feugiat, velit mauris egestas quam,
								ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="center">
			<h5>Copyright &copy reserved for Owland Inc</h5>
		</div>


	</section>

<?php  include_once 'footer.php';?>
<?php ?>
