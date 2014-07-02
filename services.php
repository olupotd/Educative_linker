<!DOCTYPE html>
<head>
<?php
session_start ();
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Services</title>
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
						<li class="active"><a href="services.php">Services</a></li>
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
					<h2>
						 <?php
							if ($_SESSION ['LOGGED'] == TRUE)
								echo "Hey " . $_SESSION ['USERNAME'] . " check out our";
							?> Services
					</h2>
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


	<section class="services">
		<div class="container">
			<div class="row-fluid">
				<?php include_once 'side_pane.php';?>
				<div class="span9 well">
					<div class="span4">
						<div class="center">
							<i style="font-size: 48px" class="icon-bar-chart icon-large"></i>
							<p></p>
							<h4>Premium Bootstrap Templates</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean
								sollicitudin, lorem quis bibendum auctor, nisi elit consequat
								ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
								nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
								velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
						</div>
					</div>

					<div class="span4">
						<div class="center">
							<i style="font-size: 48px" class="icon-cog icon-large"></i>
							<p></p>
							<h4>Web Design &amp; Development</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean
								sollicitudin, lorem quis bibendum auctor, nisi elit consequat
								ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
								nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
								velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
						</div>
					</div>

					<div class="span4">
						<div class="center">
							<i style="font-size: 48px" class="icon-heart icon-large"></i>
							<p></p>
							<h4>Premium Wordpress Themes</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean
								sollicitudin, lorem quis bibendum auctor, nisi elit consequat
								ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
								nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
								velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
						</div>
					</div>
					<hr>
					<div class="span4">
						<div class="center">
							<i style="font-size: 48px" class="icon-globe icon-large"></i>
							<p></p>
							<h4>Responsive Web Design</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean
								sollicitudin, lorem quis bibendum auctor, nisi elit consequat
								ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
								nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
								velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
						</div>
					</div>

					<div class="span4">
						<div class="center">
							<i style="font-size: 48px" class="icon-camera icon-large"></i>
							<p></p>
							<h4>iOS Application Development</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean
								sollicitudin, lorem quis bibendum auctor, nisi elit consequat
								ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
								nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
								velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
						</div>
					</div>

					<div class="span3">
						<div class="center">
							<i style="font-size: 48px" class="icon-bullhorn icon-large"></i>
							<p></p>
							<h4>Android Application Development</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean
								sollicitudin, lorem quis bibendum auctor, nisi elit consequat
								ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
								nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
								velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
						</div>
					</div>

				</div>

			</div>


		</div>
		</div>

		<hr>

		</div>
	</section>

	
			<?php include_once 'footer.php';?>