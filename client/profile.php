<!DOCTYPE html>
<html>
<head>
	<title>RemoteOS.com/profile.php</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
	<?php 
		session_start();
	 ?>
	 <div class="login-box">
	 	<i class="fa fa-user-circle fa-4x" aria-hidden="true" style="position: absolute;left: 40%;"></i><br><br><br>
	 	<h1>Profile</h1>
	 	<h2 style="position: absolute;top: 40%;left: 15%;transform: translate(-50%,-50%);border: 2px solid #ccc;padding: 13px;background-color: #81F171;color: black;border-radius: 15px;width: 120px;height: 25px;text-align: center;">Name</h2><h3 style="position: absolute;top: 40%;left: 50%;transform: translate(-50%,-50%);border: 2px solid #ccc;padding: 13px;background-color: #C5ECFA;color: black;border-radius: 15px;width: 170px;height: 25px;text-align: center;"><?php echo $_SESSION['name']; ?></h3><br>
	 	<h2 style="position: absolute;top: 60%;left: 15%;transform: translate(-50%,-50%);border: 2px solid #ccc;padding: 13px;background-color: #81F171;color: black;border-radius: 15px;width: 120px;height: 25px;text-align: center;">Username</h2><h3 style="position: absolute;top: 60%;left: 50%;transform: translate(-50%,-50%);border: 2px solid #ccc;padding: 13px;background-color: #C5ECFA;color: black;border-radius: 15px;width: 170px;height: 25px;text-align: center;"><?php echo $_SESSION['username']; ?></h3><br>
	 	<h2 style="position: absolute;top: 80%;left: 15%;transform: translate(-50%,-50%);border: 2px solid #ccc;padding: 13px;background-color: #81F171;color: black;border-radius: 15px;width: 120px;height: 25px;text-align: center;">E-mail</h2><h3 style="position: absolute;top: 80%;left: 63%;transform: translate(-50%,-50%);border: 2px solid #ccc;padding: 13px;background-color: #C5ECFA;color: black;border-radius: 15px;width: 330px;height: 25px;text-align: center;"><?php echo $_SESSION['email']; ?></h3><br>
	 </div>
</body>
</html>