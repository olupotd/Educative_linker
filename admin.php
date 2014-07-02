<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
require_once 'config.php';
session_start ();
if ($_SESSION ['LOGGED'] == TRUE) {
	if ($_SESSION ['IS_ADMIN'] != 1)
		header ( "Location: home.php" );
	if (strip_tags ( $_GET ['state'] ) == 'OK')
		echo "<script type='text/javascript'>alert('Operation Succesful');</script>";
	if (strip_tags ( $_GET ['state'] ) == 'FAILED')
		echo "<script type='text/javascript'>alert('Operation Not Succesful');</script>";
	if (strip_tags ( $_GET ) == 'AUTH_FAILED')
		echo "<script type='text/javascript'>alert('Operation Not Permitted. Your current Password Failed to Validate');</script>";
	?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control | <?php echo $_SESSION['LAST'];?></title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />

</head>
<body>
	<!-- WRAPPER START -->
	<div class="container_16" id="wrapper">
		<!-- HIDDEN COLOR CHANGER -->
		<div style="position: relative;"></div>
		<!--LOGO-->
		<div class="grid_8" id="logo">Welcome <?php echo $_SESSION['LAST'];?></div>
		<div class="grid_8">
			<!-- USER TOOLS START -->
			<div id="user_tools">
				<span> Admin interface | <a href="app_manager.php?logout=1">Logout</a></span>
			</div>
		</div>
		<!-- USER TOOLS END -->
		<div class="grid_16" id="header" style="align: center">
			<!-- MENU START -->
			<div id="menu">
				<ul class="group" id="menu_group_main">
					<li class="item first" id="one"><a href="admin.php"><span
							class="outer"><span class="inner dashboard">Control Panel</span></span></a></li>
					<li class="item middle" id="two"><a href="?id=edit_content"
						class="main"><span class="outer"><span class="inner users">Add
									User</span></span></a></li>
					<li class="item middle" id="five"><a href="?id=question"
						class="main"><span class="outer"><span class="inner content">Add
									Event</span></span></a></li>
					<li class="item middle" id="five"><a href="?id=media" class="main"><span
							class="outer"><span class="inner users">Registered Users</span></span></a></li>
					<li class="item middle" id="five"><a href="?id=change_pass"
						class="main"><span class="outer"><span class="inner content">Change
									Password</span></span></a></li>
					<li class="item middle" id="five"><a href="?id=contact"
						class="main"><span class="outer"><span class="inner media_library">Contact</span></span></a></li>
				</ul>
			</div>
			<!-- MENU END -->
		</div>


		<!-- HIDDEN SUBMENU END -->

		<!-- CONTENT START -->
		<div class="grid_16" id="content">
			<div class="grid_9">
				<!--  TITLE START  -->
				<h1 class="dashboard">DashBoard</h1>
			</div>
			<!--RIGHT TEXT/CALENDAR-->

			<!--RIGHT TEXT/CALENDAR END-->
			<div class="clear"></div>
			<!--  TITLE END  -->
			<!-- #PORTLETS START -->
			<?php
	if (strip_tags ( $_GET ['id'] )) {
		
		if (strip_tags ( $_GET ['id'] ) == 'change_pass') {
			?>
			
					<div class="portlet">
				<div class="portlet-content">
					<table align="center">
						<thead>
							<td><h3>Change your password.</h3></td>
						</thead>
						<tbody>
							<form method="post" action="app_manager.php?change_pass=1">
								<tr>
									<td><input type="text" name="curr_pass"
										placeHolder="Current Password" /></td>
								</tr>
								<tr>
									<td><input type="text" name="new_pass"
										placeHolder="New Password" /></td>
								</tr>
								<tr>
									<td><input type="submit" value="change"></input></td>
								</tr>
							</form>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php
		}
		if (strip_tags ( $_GET ['id'] ) == 'edit_content') {
			?>
			<div id="portlets">
		<!-- FIRST SORTABLE COLUMN START -->
		<div>
			<div class="portlet">
				<div class="portlet-content">
					<form method="post" action="app_manager.php?user_reg=attempt">
						<table width="100%" cellpadding="0" cellspacing="0"
							id="box-table-a" summary="Add new User">
							<thead>
								<tr>
									<td width="34" scope="col" colspan=2 align="center">Add a new
										User</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan=2 align="center"><input type="text" name="username"
										id="textfield" class="largeInput" placeHolder="Username" /></td>
								</tr>
								<tr>
									<td colspan=2 align="center"><input type="password"
										name="password" id="textfield" class="largeInput"
										placeHolder="Password" /></td>
								</tr>
								<tr>
									<td colspan=2 align="center"><input type="text" name="email"
										id="textfield2" class="largeInput" placeHolder="Email" /></td>

								</tr>
								<tr>
									<td align="right">User <input type="radio" name="rights"
										class="radio" value="E" /></td>
									<td align="left">Admin <input type="radio" name="rights"
										class="radio" value="A" /></td>
								</tr>
								<tr>
									<td align="center"><input type="reset" value="Cancel" /></td>
									<td align="center"><input type="submit" value="Register" /></td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
				<?php  }if (strip_tags ( $_GET ['id'] ) == 'question') {?>
				<div id="portlets">
		<!-- FIRST SORTABLE COLUMN START -->
		<div>
			<div class="portlet">
				<div class="portlet-content">
					<form action="manager.php?quest_info=1" method="post">
						<table width="100%" cellpadding="0" cellspacing="0"
							id="box-table-a" summary="Add new Schedule">
							<thead>
								<tr>
									<td width="34" scope="col" colspan=2 align="center">Add a new
										Evaluation Category</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan=2 align="center"><input type="text" name="category"
										placeHolder="Evaluation Category."></td>
								</tr>
								<tr>
									<td colspan=2 align="center"><textarea cols="50" rows="5"
											name="description" placeHolder="Description"> </textarea></td>
								</tr>
								</tr>
								<tr>
									<td align="center" colspan=2><input type="submit"
										value="Assign" /></td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
					<?php } if (strip_tags ( $_GET ['id'] ) == 'contact') { ?>
					<div id="portlets">
		<!-- FIRST SORTABLE COLUMN START -->
		<div>
			<div class="portlet">
				<div class="portlet-content">
					<form method="post" action="manager.php?inbox=sends">
						<table width="100%" cellpadding="0" cellspacing="0"
							id="box-table-a" summary="Send user a message" border="0">
							<thead>
								<tr>
									<td width="34" scope="col" colspan=2 align="center">Send a user
										a message</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan=2 align="center"><input type="text" name="email"
										id="textfield" class="largeInput" placeHolder="to-email" /></td>
								</tr>
								<tr>
									<td colspan=2 align="center"><textarea cols="50" rows="5"
											placeHolder="Message here" name="message"></textarea></td>
								</tr>
								<tr>
									<td align="center"><input type="reset" value="Cancel" /></td>
									<td align="center"><input type="submit" value="Send" /></td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
						<?php
		}
		if (strip_tags ( $_GET ['id'] ) == 'media') {
			?>
						<div id="portlets">
		<div class="clear"></div>
		<!--THIS IS A WIDE PORTLET-->
		<div class="portlet">
			<div class="portlet-header fixed">
				<img src="images/icons/user.gif" width="16" height="16"
					alt="Latest Registered Users" /> Registered Users
			</div>

			<div class="portlet-content nopadding">
				<form action="" method="post">
					<table width="100%" cellpadding="0" cellspacing="0"
						id="box-table-a" summary="Employee Pay Sheet">
						<thead>
							<tr>
								<th width="34" scope="col"><input type="checkbox" name="allbox"
									id="allbox" onclick="checkAll()" /></th>
								<th width="136" scope="col">Username</th>
								<th width="136" scope="col">First Name</th>
								<th width="136" scope="col">Last Name</th>
								<th width="129" scope="col">Gender</th>
								<th width="171" scope="col">E-mail</th>
								<th width="123" scope="col">Is admin</th>
								<th width="90" scope="col">Actions</th>
							</tr>
						</thead>
											<?php
			$sql_query = mysql_query ( "SELECT * from User limit 10" );
			while ( $row = mysql_fetch_assoc ( $sql_query ) ) {
				?>
											<tbody>
							<tr>
								<td width="34"><label> <input type="checkbox" name="checkbox"
										id="checkbox" value="<?php echo $row['id'];?>" />
								</label></td>
								<td><?php echo $row['username'];?></td>
								<td><?php
				if ($row ['first_name'] != NULL)
					echo $row ['first_name'];
				else
					echo "Not Updated yet";
				?></td>
								<td><?php
				
				if ($row ['last_name'] != NULL)
					echo $row ['last_name'];
				else
					echo "Not Updated yet";
				?></td>
								<td><?php
				
				if ($row ['gender'] != NULL)
					echo $row ['gender'];
				else
					echo "Not Updated yet";
				?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php
				if ($row ['is_admin'] == '1')
					echo "YES";
				else
					echo "No";
				?></td>
								<td width="90"></a> <a
									href="app_manager.php?delete_user=<?php echo $row['id'];?>"
									class="delete_icon" title="Delete"></a></td>
							</tr>
						</tbody>
											<?php }?>
										</table>
				</form>
			</div>
		</div>
	</div>

	</div>
	<!--  END #PORTLETS --> <?php
		}
	} else {
		?>
	<div id="portlets">
		<!-- FIRST SORTABLE COLUMN START -->
		<div>
			<div class="portlet">
				<div class="portlet-content ">
										Welcome <?php echo $_SESSION['LAST'];?>. this is your home page. To get started, simply
										use the navigation pane above to start editing your content
										<table width="100%" cellpadding="0" cellspacing="0"
						id="box-table-a" summary="Employee Pay Sheet">
						<thead>
							<tr>
								<th width="136" scope="col">From</th>
								<th width="109" scope="col">Email</th>
								<th width="102" scope="col">Phone</th>
								<th width="129" scope="col">Message</th>
								<th width="171" scope="col">Read</th>
								<th width="171" scope="col">Mark as Read</th>
							</tr>
						</thead>
					<?php
		$mail = mysql_query ( "select * from Message where is_read = 0" );
		while ( $row = mysql_fetch_assoc ( $mail ) ) {
			?>
						<tbody>
							<tr>
								<td><?php echo $row['fullname'];?></td>
								<td><?php echo $row ['email'];?></td>
								<td><?php echo $row['phone'];?></td>
								<td><?php echo $row['message'];?></td>
								<td><?php
			if ($row ['is_read'] == '0')
				echo 'Not Yet';
			else
				echo 'YES';
			?></td>
								<td><a href="manager.php?mark_as_read=<?php echo $row['id'];?>"
									class="edit_icon" title="Mark as Read"></a></td>
							</tr>

						</tbody>
<?php }?>
					</table>

				</div>
			</div>
		</div>
	</div>
	</div>
	<?php
	}
	?>
					</div>
	</div>
	</div>
	<div class="clear"></div>
	</div>
	<!-- WRAPPER END -->
	<!-- FOOTER START -->
	<div class="container_16" id="footer"></div>
	</div>
	<script type="text/javascript"
		src="../../ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.sortable.js"></script>
	<script type="text/javascript" src="js/ui.dialog.js"></script>
	<script type="text/javascript" src="js/ui.datepicker.js"></script>
	<script type="text/javascript" src="js/effects.js"></script>
	<script type="text/javascript" src="js/flot/j	query.flot.pack.js"></script>
	<script language="javascript" type="text/javascript" src="js/graphs.js"></script>


	<!-- FOOTER END -->
	<?php } else { ?>
	<script type="text/javascript">
		alert('You must login to get exclusive rights to view this page');
		window.location = "signin.php";
	</script>
	<?php
	// Dead code. Can be activated in case You need more security and the system is to run on the Internet
	// header ( "Location: signin.php" );
}
?>


















































</body>
</html>
