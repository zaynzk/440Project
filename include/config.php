<?php
//DATABASE CONNECTION with exception condition
$host = "localhost";
$username = "root";
$password = "";
$database = "reach";

$sql = mysqli_connect($host, $username, $password, $database) or die('Could not connect');

?>