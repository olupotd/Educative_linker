<!DOCTYPE html>
<head>
<?php
session_start ();
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Contact Us | Nova</title>
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
						<li class="active"><a href="contact-us.php">Contact</a></li>
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
					<h2>We are more than glad to be of assistance</h2>
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

	<section id="contact-page" class="container">
		<div class="row-fluid">
		<?php include_once 'side_pane.php';?>
			<div class="span6 well">
				<h4>Contact Form</h4>
				<div class="status alert alert-success" style="display: none"></div>

				<form id="main-contact-form" class="contact-form"
					name="contact-form" method="post" action="sendemail.php">
					<div class="row-fluid">
						<div class="span5">
							<label>First Name</label> <input type="text"
								class="input-block-level" required="required"
								placeholder="Your First Name"> <label>Last Name</label> <input
								type="text" class="input-block-level" required="required"
								placeholder="Your Last Name"> <label>Email Address</label> <input
								type="text" class="input-block-level" required="required"
								placeholder="Your email address">
						</div>
						<div class="span7">
							<label>Message</label>
							<textarea name="message" id="message" required="required"
								class="input-block-level" rows="8"></textarea>
						</div>

					</div>
					<button type="submit" class="btn btn-primary btn-large pull-right">Send
						Message</button>
					<p></p>

				</form>
			</div>

			<div class="span3 well">
				
				<h4>Our Address</h4>
				<br><br>
				<p>Pellentesque habitant morbi tristique senectus et netus et
					malesuada fames ac turpis egestas.</p>
				<p>
					<i class="icon-map-marker pull-left"></i> 1209 Willow Oaks Lane,
					New York<br> Lafayette, 1212, United States
				</p>
				<p>
					<i class="icon-envelope"></i> &nbsp;email@example.com
				</p>
				<p>
					<i class="icon-phone"></i> &nbsp;+123 45 67 89
				</p>
				<p>
					<i class="icon-globe"></i> &nbsp;http://www.shapebootstrap.net
				</p>
			</div>

		</div>

	</section>


	<section class="no-margin">
		<iframe width="100%" height="200" frameborder="0" scrolling="no"
			marginheight="0" marginwidth="0"
			src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kampala,+Kampala+Division,+Uganda&amp;aq=0&amp;oq=kampala+ban&amp;sll=40.714353,-74.005973&amp;sspn=0.836898,1.815491&amp;ie=UTF8&amp;hq=&amp;hnear=Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=24.542126,90.293884&amp;spn=0.124922,0.411301&amp;z=8&amp;output=embed"></iframe>
	</section>


	<?php include_once 'footer.php';?>