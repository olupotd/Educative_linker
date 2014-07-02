<!DOCTYPE html>
<?php
session_start ();
if ($_SESSION ['LOGGED'] == TRUE) {
	header ( "Location: home.php" );
} else {
	?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Home | Nova</title>
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
						<li><a href="contact-us.php">Contact</a></li>
						<li><a href="register.php">Register</a></li>
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

	<!--Slider-->

	<section id="slide-show">
		<?php include_once 'side_pane.php';?>
		
			<div id="slider" class="sl-slider-wrapper">
			<!--Slider Items-->
			<div class="sl-slider span5">
				<!--Slider Item1-->
				<div class="sl-slide item1" data-orientation="horizontal">
					<div class="sl-slide-inner">
						<div class="container container-small">
							<img class="pull-right" src="images/sample/slider/img1.png"
								alt="" />
							<h2>Creative Ideas</h2>
							<h3 class="gap">Computing Definitions!</h3>
							<a class="btn btn-large btn-transparent" href="event.php?id=1">Learn More</a>
						</div>
					</div>
				</div>
				<!--/Slider Item1-->

				<!--Slider Item2-->
				<div class="sl-slide item2" data-orientation="vertical"
					data-slice1-rotation="10" data-slice2-rotation="-15"
					data-slice1-scale="1.5" data-slice2-scale="1.5">
					<div class="sl-slide-inner">
						<div class="container">
							<img class="pull-right" src="images/sample/slider/img2.png"
								alt="" />
							<h2>Planning &amp; Analysis</h2>
							<h3 class="gap">Bussines and Educative analysis</h3>
							<a class="btn btn-large btn-transparent" href="event.php?id=2">Learn More</a>
						</div>
					</div>
				</div>
				<!--Slider Item2-->

				<!--Slider Item3-->
				<div class="sl-slide item3" data-orientation="horizontal"
					data-slice1-rotation="3" data-slice2-rotation="3"
					data-slice1-scale="2" data-slice2-scale="1">
					<div class="sl-slide-inner">
						<div class="container">
							<img class="pull-right" src="images/sample/slider/img3.png"
								alt="" />
							<h2>Unique Solutions</h2>
							<h3 class="gap">Fast and Cutting Edge technology</h3>
							<a class="btn btn-large btn-transparent" href="event.php?id=3">Learn More</a>
						</div>
					</div>
				</div>
				<!--Slider Item3-->

			</div>
			<!--/Slider Items-->

			<!--Slider Next Prev button-->
			<nav id="nav-arrows" class="nav-arrows">
				<span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
				<span class="nav-arrow-next"><i class="icon-angle-right"></i></span>
			</nav>
			<!--/Slider Next Prev button-->

		</div>
		<!-- /slider-wrapper -->
	</section>

	<!--/Slider-->

	<!--Services-->
	<section id="services">
		<div class="container">
			<div class="center gap">
				<h3>How it Works</h3>
				<p class="lead">Below is a list of steps you can follow to get
					acquinted with this system.</p>
			</div>

			<div class="row-fluid">
				<div class="span4">
					<div class="media">
						<div class="pull-left">
							<i class="icon-globe icon-medium"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Register/Login</h4>
							<p>Pellentesque habitant morbi tristique senectus et netus et
								malesuada fames ac turpis egestas. Vestibulum tortor quam,
								feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
								libero sit amet quam egestas semper. Aenean ultricies mi vitae
								est. Mauris placerat eleifend leo.</p>
						</div>
					</div>
				</div>

				<div class="span4">
					<div class="media">
						<div class="pull-left">
							<i class="icon-thumbs-up-alt icon-medium"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Update your profile</h4>
							<p>Pellentesque habitant morbi tristique senectus et netus et
								malesuada fames ac turpis egestas. Vestibulum tortor quam,
								feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
								libero sit amet quam egestas semper. Aenean ultricies mi vitae
								est. Mauris placerat eleifend leo.</p>
						</div>
					</div>
				</div>

				<div class="span4">
					<div class="media">
						<div class="pull-left">
							<i class="icon-leaf icon-medium icon-rounded"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Find an Expert or Topic</h4>
							<p>Pellentesque habitant morbi tristique senectus et netus et
								malesuada fames ac turpis egestas. Vestibulum tortor quam,
								feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
								libero sit amet quam egestas semper. Aenean ultricies mi vitae
								est. Mauris placerat eleifend leo.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="gap"></div>

			<div class="row-fluid">
				<div class="span4">
					<div class="media">
						<div class="pull-left">
							<i class="icon-shopping-cart icon-medium"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Select an attandance mode</h4>
							<p>Pellentesque habitant morbi tristique senectus et netus et
								malesuada fames ac turpis egestas. Vestibulum tortor quam,
								feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
								libero sit amet quam egestas semper. Aenean ultricies mi vitae
								est. Mauris placerat eleifend leo.</p>
						</div>
					</div>
				</div>

				<div class="span4">
					<div class="media">
						<div class="pull-left">
							<i class="icon-globe icon-medium"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Enroll &amp; Scedule Time</h4>
							<p>Pellentesque habitant morbi tristique senectus et netus et
								malesuada fames ac turpis egestas. Vestibulum tortor quam,
								feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
								libero sit amet quam egestas semper. Aenean ultricies mi vitae
								est. Mauris placerat eleifend leo.</p>
						</div>
					</div>
				</div>

				<div class="span4">
					<div class="media">
						<div class="pull-left">
							<i class="icon-shopping-cart icon-medium"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Pay online and Rate Their experience</h4>
							<p>Pellentesque habitant morbi tristique senectus et netus et
								malesuada fames ac turpis egestas. Vestibulum tortor quam,
								feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
								libero sit amet quam egestas semper. Aenean ultricies mi vitae
								est. Mauris placerat eleifend leo.</p>
						</div>1
					</div>
				</div>
			</div>

		</div>
	</section>
	<!--/Services-->

	<section id="recent-works">
		<div class="container">
			<div class="center">
				<h3>Trending Events and Activities</h3>
				<p class="lead">These are some of the most active events and
					currently on-going.</p>
			</div>
			<div class="gap"></div>
			<ul class="gallery col-4">
				<!--Item 1-->
				<li>
					<div class="preview">
						<img alt=" " src="images/portfolio/thumb/item1.jpg">
						<div class="overlay"></div>
						<div class="links">
							<a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a
								href="#"><i class="icon-link"></i></a>
						</div>
					</div>
					<div class="desc">
						<h5>
							Plant and Animal Biology study<br> <i>With Osteen</i>
						</h5>
					</div>
					<div id="modal-1" class="modal hide fade">
						<a class="close-modal" href="javascript:;" data-dismiss="modal"
							aria-hidden="true"><i class="icon-remove"></i></a>
						<div class="modal-body">
							<img src="images/portfolio/full/item1.jpg" alt=" " width="100%"
								style="max-height: 400px">
						</div>
					</div>
				</li>
				<!--/Item 1-->

				<!--Item 2-->
				<li>
					<div class="preview">
						<img alt=" " src="images/portfolio/thumb/item2.jpg">
						<div class="overlay"></div>
						<div class="links">
							<a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a
								href="#"><i class="icon-link"></i></a>
						</div>
					</div>
					<div class="desc">
						<h5>
							Reproduction in Animals <br> <i>With Peter</i>
						</h5>
					</div>
					<div id="modal-1" class="modal hide fade">
						<a class="close-modal" href="javascript:;" data-dismiss="modal"
							aria-hidden="true"><i class="icon-remove"></i></a>
						<div class="modal-body">
							<img src="images/portfolio/full/item2.jpg" alt=" " width="100%"
								style="max-height: 400px">
						</div>
					</div>
				</li>
				<!--/Item 2-->

				<!--Item 3-->
				<li>
					<div class="preview">
						<img alt=" " src="images/portfolio/thumb/item3.jpg">
						<div class="overlay"></div>
						<div class="links">
							<a data-toggle="modal" href="#modal-3"><i class="icon-eye-open"></i></a><a
								href="#"><i class="icon-link"></i></a>
						</div>
					</div>
					<div class="desc">
						<h5>
							Art and Craft Study and analysis<br> <i>With Jane</i>
						</h5>
					</div>
					<div id="modal-3" class="modal hide fade">
						<a class="close-modal" href="javascript:;" data-dismiss="modal"
							aria-hidden="true"><i class="icon-remove"></i></a>
						<div class="modal-body">
							<img src="images/portfolio/full/item3.jpg" alt=" " width="100%"
								style="max-height: 400px">
						</div>
					</div>
				</li>
				<!--/Item 3-->

				<!--Item 4-->
				<li>
					<div class="preview">
						<img alt=" " src="images/portfolio/thumb/item4.jpg">
						<div class="overlay"></div>
						<div class="links">
							<a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a><a
								href="#"><i class="icon-link"></i></a>
						</div>
					</div>
					<div class="desc">
						<h5>
							Capentry and Wood Curving. <br> <i>With Douglas</i>
						</h5>
					</div>
					<div id="modal-4" class="modal hide fade">
						<a class="close-modal" href="javascript:;" data-dismiss="modal"
							aria-hidden="true"><i class="icon-remove"></i></a>
						<div class="modal-body">
							<img src="images/portfolio/full/item4.jpg" alt=" " width="100%"
								style="max-height: 400px">
						</div>
					</div>
				</li>
				<!--/Item 4-->

			</ul>
		</div>

	</section>

<?php } include_once 'footer.php';?>
<?php ?>