<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "lougeh-database";


$connection = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$connection) {
	echo "Connection failed!";
}