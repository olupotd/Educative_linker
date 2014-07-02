<?php
session_start ();
require_once 'config.php';

// Module Handles Login Authentication of Al Users.
if (strip_tags ( $_GET ['perform_auth'] )) {
	$username = mysql_real_escape_string ( strip_tags ( $_POST ['username'] ) );
	$password = mysql_real_escape_string ( strip_tags ( $_POST ['password'] ) );
	$rem = strip_tags ( $_POST ['remember'] );
	$login_query = "SELECT * FROM User where username = '$username' and password = '" . md5 ( $password ) . "'";
	$object = mysql_query ( $login_query );
	if (mysql_num_rows ( $object ) == 1) {
		while ( $row = mysql_fetch_assoc ( $object ) ) {
			$_SESSION ['LOGGED'] = TRUE;
			$_SESSION ['USERID'] = $row ['id'];
			$_SESSION ['USERNAME'] = $row ['username'];
			$_SESSION ['EMAIL'] = $row ['email'];
			$_SESSION ['AUTO_LOGIN'] = md5 ( $_SESSION ['USERID'] );
			$_SESSION ['IMG_URL'] = $row ['img_url'];
			$_SESSION ['GENDER'] = $row ['gender'];
			$_SESSION ['FIRST'] = $row ['first_name'];
			$_SESSION ['USER_DESC'] = $row ['user_description'];
			$_SESSION ['LAST'] = $row ['last_name'];
			$_SESSION ['IS_ADMIN'] = $row ['is_admin'];
			header ( "Location: home.php" );
		}
	} else {
		// user validation failed.
		session_destroy ();
		header ( "Location: index.php" );
	}
}

// handles Deletion of a user by the admin
if (strip_tags ( $_GET ['delete_user'] )) {
	$id = $_GET ['delete_user'];
	$deleted = mysql_query ( "delete from User where id = $id" );
	if ($deleted)
		header ( "Location: admin.php?state=OK" );
	else
		header ( "Location: admin.php?state=FAILED" );
}

// Logout handler for all users, Admin or not.
if (strip_tags ( $_GET ['logout'] )) {
	session_destroy ();
	header ( "Location: index.php" );
}

// handles registering a user
if (strip_tags ( $_GET ['user_reg'] )) {
	// atleast we can now process the user's submitted information
	$username = mysql_real_escape_string ( strip_tags ( $_POST ['username'] ) );
	$password = mysql_real_escape_string ( strip_tags ( $_POST ['password'] ) );
	$email = mysql_real_escape_string ( strip_tags ( $_POST ['email'] ) );
	
	// If the Admin is adding a new user.
	if (strip_tags ( $_POST ['rights'] )) {
		// If a user being added is an Admin
		if (strip_tags ( $_POST ['rights'] ) == 'A')
			$reg_status = mysql_query ( "INSERT INTO User(username, password, email, is_admin) VALUES('$username','" . md5 ( $password ) . "','$email', '1')" );
		else
			$reg_status = mysql_query ( "INSERT INTO User(username, password, email, is_admin) VALUES('$username','" . md5 ( $password ) . "','$email', '0')" );
		if ($reg_status)
			header ( "Location: admin.php?state=OK" );
		else
			header ( "Location: admin.php?state=FAILED" );
	} else {
		// ORdinary user is attempting to signup.
		$reg_status = mysql_query ( "INSERT INTO User(username, password, email, is_admin) VALUES('$username','" . md5 ( $password ) . "','$email'), '0'" );
		if ($reg_status)
			header ( "Location: register.php?state=OK" );
		else
			header ( "Location: register.php?state=FAILED" );
	}
}

if (strip_tags ( $_GET ['change_pass'] )) {
	$old_pass = mysql_real_escape_string ( strip_tags ( $_POST ['curr_pass'] ) );
	$new_pass = mysql_real_escape_string ( strip_tags ( $_POST ['new_pass'] ) );
	// check to see if the user actually is not a fraud.
	$inquiry = mysql_query ( "select id, is_admin from User where password = '" . md5 ( $old_pass ) . "'" );
	if (mysql_num_rows ( $inquiry ) == 1) {
		// he does exist. It's not the strngest but it's better than nothing. Needs improvement in future
		$perform = mysql_query ( "update User set password = '" . md5 ( $new_pass ) . "' where id = " . $_SESSION ['ID'] );
		if ($perform)
			header ( "Location: admin.php?state=OK" );
		else
			header ( "Location: admin.php?state=FAILED" );
	} else {
		header ( "Location: admin.php?state=AUTH_FAILED" );
	}
}

?>