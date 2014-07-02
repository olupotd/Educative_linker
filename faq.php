<!DOCTYPE html>
<?php
session_start ();
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Frequently Asked Question</title>
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
						<li><a href="contact-us.php">Contact</a></li>
						<?php
						if ($_SESSION ['LOGGED'] == TRUE) {
							echo "<li class='active'><a href=\"faq.php\">FAQ</a></li>";
							echo "<li><a href=\"app_manager.php?logout=true\">Logout</a></li>";
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
					<h2>Frequently asked Questions</h2>
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

	<section id="faqs" class="container">
		<div class="row-fluid">
<?php include_once 'side_pane.php';?>
			<ul class="faq span9">
			<?php
			for($i = 1; $i <= 3; $i ++) {
				?>
				<li><a href="#"><span class="number"><?php echo $i;?></span></a>
					<div>
						<a href="#"><h4>Lorem ipsum dolor sit amet, consectetuer
								adipiscing elit.</h4></a>
						<p>Pellentesque habitant morbi tristique senectus et netus et
							malesuada fames ac turpis egestas. Vestibulum tortor quam,
							feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
							libero sit amet quam egestas semper. Aenean ultricies mi vitae
							est. Mauris placerat eleifend leo. Quisque sit amet est et sapien
							ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,
							commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget
							tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus
							lacus enim ac dui. Donec non enim in turpis pulvinar facilisis.
							Ut felis. Praesent dapibus, neque id cursus faucibus, tortor
							neque egestas augue, eu vulputate magna eros eu erat. Aliquam
							erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
							facilisis luctus, metus</p>
					</div></li>
					
					<?php }?>

			</ul>
			<p>&nbsp;</p>


		</div>



	</section>
<?php include_once 'footer.php';?>