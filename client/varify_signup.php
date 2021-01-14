<?php
include "database.php";
session_start();
if ($_SESSION['passwd3']===$_SESSION['passwd5']) {
	$nm = $_SESSION['name3'];
	$eml = $_SESSION['email3'];
	$un = $_SESSION['uname3'];
	$psswd = $_SESSION['passwd3'];
	$sql = "INSERT into users VALUES('$nm','$eml','$un','$psswd')";
	$result = mysqli_query($conn, $sql);
	if($result){
		echo "done";
	}
	else{
		echo "Failed";
	}

}