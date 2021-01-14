<?php

$sname = "localhost:3345";
$uname = "root";
$password = "";
$db_name = "logindb";
$conn = mysqli_connect($sname, $uname, $password, $db_name);

// Check connection
if (!$conn) {

	echo "connection Failed....";
 }
