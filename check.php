<?php
session_start ();
require_once 'config.php';
$login_query = "SELECT * FROM reg_user";
$object = mysql_query ( $login_query );
if (mysql_num_rows ( $object ) >= 1) {
	while ( $row = mysql_fetch_assoc ( $object ) ) {
		echo $row ['username'];
	}
}
echo md5 ( md5 ( 'justin' ) );
?>