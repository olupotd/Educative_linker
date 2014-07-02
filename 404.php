<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>404</title>
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
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about-us.php">About Us</a></li>
						<li><a href="services.php">Services</a></li>
						<?php
						if ($_SESSION ['LOGGED'] == TRUE)
							echo "<li><a href=\"blog.php\">Blog</a></li>";
						?>
						<li><a href="registration.php">Registration</a></li>
						<li><a href="contact-us.php">Contact</a></li>
						<li class="login"><a data-toggle="modal" href="#loginForm">Login <i
								class="icon-lock"></i></a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</header>
	<!-- /header -->

	<!-- 404 error -->
	<section id="error" class="container">
		<h1>404, Page not found</h1>
		<p>The Page you are looking for doesn't exist or an other error
			occurred.</p>
		<a class="btn btn-success" href="index.html">GO BACK TO THE HOMEPAGE</a>
	</section>
	<!-- /404 error -->

<?php require_once 'footer.php';?>
