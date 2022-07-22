<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "min_market";

$connect=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if (!$connect){
	die('Failed to connect to database:'.mysqli_connect_error());	
}
?>