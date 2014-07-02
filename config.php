<?php
$db_username = "root";
$db_password = "justin";
$host = "localhost";
$database_name = "nova_db";

// Create a persistent connection to mysql
$connection = mysql_connect ( $host, $db_username, $db_password );
mysql_select_db ( $database_name, $connection );

?>