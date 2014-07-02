<!DOCTYPE html>
<?php
session_start ();
if ($_SESSION ['LOGGED'] == TRUE) {
	if ($_SESSION ['IS_ADMIN'] == '1')
		header ( "Location: admin.php" );
	require_once 'config.php';
	// Only load all this javascript if the user has logged in.
	?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Home</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/sl-slide.css">

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
						<li><a href="faq.php">FAQ</a></li>
						<li class="login"><a href="app_manager.php?logout=true">Logout </a></li>
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
					<h1>Welcome, You are <?php echo $_SESSION['USERNAME'];?></h1>
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
			<!-- Main Body for Home page -->
			<div class="span9">
				<div class="blog">
					<div class="blog-item well">
						<ul class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#home" role="tab" data-toggle="tab">Home</a></li>
							<li><a href="#profile" role="tab" data-toggle="tab">Profile</a></li>
							<li><a href="#events" role="tab" data-toggle="tab">Events</a></li>
							<li><a href="#payment" role="tab" data-toggle="tab">Payments</a></li>
							<li><a href="#create_event" role="tab" data-toggle="tab">Create
									an event</a></li>
							<li><a href="#messages" role="tab" data-toggle="tab">Messages</a></li>
							<li><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="home">
						Welcome <?php echo $_SESSION['USERNAME'];?>. This means you've successfully
						 logged in and can now update your profile and create events for others to subscribe to 
						.</div>
							<div class="tab-pane" id="events">This tab section is for the
								home.</div>
							<div class="tab-pane" id="create_event">This tab section is for
								the home.</div>
							<div class="tab-pane" id="payment">This tab section is for the
								home.</div>

							<div class="tab-pane" id="profile">
								<form action="" method="post">
									<div class="span6 center well">
										<label>Uername</label><input type="text" name="username">
									</div>

								</form>

							</div>
							<div class="tab-pane" id="messages">Section is for the messages.
							</div>
							<div class="tab-pane" id="settings">User settings go here..</div>



						</div>
					</div>
					<div class="gap"></div>
				</div>
			</div>
			<!-- Main pane -->
		</div>
		<div class="center">
			<h5>Copyright &copy reserved for Owland Inc</h5>
		</div>

	</section>


<?php
} else {
	// edirect the user back to a login page.	?>
	<script type="text/javascript">
	window.location="http://localhost/app_base/";
	</script>
	<?php
}
include_once 'footer.php';
?>
<?php ?>