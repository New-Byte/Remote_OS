<?php
	session_start();  
	$username=$_SESSION['username'];
	echo("<script>alert('Logout Success');</script>");
	session_destroy();
	session_unset();
	if (isset($_COOKIE['username']) and isset($_COOKIE['password'])) 
	{
		$username=$_COOKIE['username'];
		$password=$_COOKIE['password'];
		setcookie('username' ,null, time()-1);
		setcookie('password' ,null, time()-1);
	}
	header('Location:index.php');
?>