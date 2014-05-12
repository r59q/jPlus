<?php

// Connection
$host = 'localhost';
$username = 'root';
$password = '';

$create_database = 'playerlist';
$use_database = 'playerlist';

$connection = mysql_connect($host,$username,$password);

if (!$connection) {

    die('Could not connect to MySQL: ' . mysql_error());
}

?>