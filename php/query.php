<?php

include "mysql.php";

$query_create_database = mysql_query('CREATE DATABASE IF NOT EXISTS '.$create_database, $connection);

if (!$query_create_database) {
    die('Invalid query: ' . mysql_error());
}

// select the specific database name we want to access.

if (!mysql_select_db($use_database)) die(mysql_error());
echo "success in database selection.";

echo 'Database succesfully created '.$create_database;

$result = "CREATE TABLE IF NOT EXISTS users (
            username VARCHAR(30) PRIMARY KEY NOT NULL,
            steamid VARCHAR(20),
            ip_address VARCHAR(30)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";

mysql_query($result);

echo '<br> Attempting to use the database...';
echo '<br> Connection OK'; mysql_close($connection);

?>






