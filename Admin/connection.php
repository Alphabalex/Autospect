<?php
date_default_timezone_set("Africa/Lagos"); 
$hostname='localhost';
$username='root';
$password='';
$database='inspect';
$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
	echo "Connection error".mysql_connect_erro();
	exit();
	}
?>