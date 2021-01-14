<?php 
	include('database.php'); 
	$mail = $_POST['email1'];
	$name = $_POST['username'];
	$sql = "SELECT * FROM users WHERE email='$mail' AND username='$name'";
	if(mysqli_query($conn, $sql)){
		$row = mysqli_fetch_assoc($result);
		$pass = $row['password'];
		$msg = "Message From RemoteOS.Password for your account with username ".$name." is ".$pass;
		$msg = wordwrap($msg,100);
		if(mail($mail,"RemoteOS Password for user account",$msg)){
			header("Location: reset.php?ins=E-mail sent successfully");
		}
		else{
			header("Location: reset.php?ins=Couldn't send email");
		}
	}
?>