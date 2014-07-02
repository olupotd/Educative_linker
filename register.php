<!DOCTYPE html>
<?php
session_start ();
if ($_SESSION ['LOGGED'] == TRUE) {
	header ( "Location:home.php" );
	// Only load all this javascript if the user has logged in.
} else {
	if (strip_tags ( $_GET ['state'] ) == 'OK')
		echo "<script type='text/javascript'>alert('You've succesfully registered. Please Login to Proceed.');</script>";
	if (strip_tags ( $_GET ['state'] ) == 'FAILED')
		echo "<script type='text/javascript'>alert('Your Registration process failed. try again');</script>";
	?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Registration</title>
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
						<li><a href="about-us.php">About Us</a></li>
						<li><a href="services.php">Services</a></li>
						<?php
	if ($_SESSION ['LOGGED'] == TRUE)
		echo "<li><a href=\"blog.php\">Blog</a></li>";
	?>
						<li class="active"><a href="registration.php">Registration</a></li>
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


	<section class="title">
		<div class="container">
			<div class="row-fluid">
				<div class="span6">
					<h1>Get started. Register</h1>
				</div>
				<div class="span6">
					<ul class="breadcrumb pull-right">
						<li><a href="index.html">Home</a> <span class="divider">/</span></li>
						<li class="active">Register</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- / .title -->


	<section id="registration-page" class="container">
		<form class="center" action='app_manager.php?user_reg=true'
			method="POST">
			<fieldset class="registration-form">
				<div class="control-group">
					<!-- Username -->
					<div class="controls">
						<input type="text" name="username" placeholder="Username"
							class="input-xlarge">
					</div>
				</div>

				<div class="control-group">
					<!-- E-mail -->
					<div class="controls">
						<input type="text" name="email" placeholder="E-mail"
							class="input-xlarge">
					</div>
				</div>

				<div class="control-group">
					<!-- Password-->
					<div class="controls">
						<input type="password" name="password" placeholder="Password"
							class="input-xlarge">
					</div>
				</div>

				<div class="control-group">
					<!-- Password -->
					<div class="controls">
						<input type="password" id="password_confirm"
							name="password_confirm" placeholder="Password (Confirm)"
							class="input-xlarge">
					</div>
				</div>

				<div class="control-group">
					<!-- Button -->
					<div class="controls">
						<button class="btn btn-success btn-large btn-block">Register</button>
					</div>
				</div>
			</fieldset>
		</form>
	</section>
	<!-- /#registration-page -->




<?php }include_once 'footer.php';?>
<?php ?>
