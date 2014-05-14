<?php
// Check connection
include 'functions.php';

connect();

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Create table
$sql = "CREATE TABLE users
(
PID INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(PID),
username CHAR(30),
password CHAR(30),
mail char(30),
steamid CHAR(30),
newsletter BOOL
)";

// Execute query
if (mysql_query($sql)) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}
?>