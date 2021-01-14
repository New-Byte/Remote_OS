<!DOCTYPE html>
<html>
<head>
	<title>RemoteOS.com/signup</title>
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel = "icon" href = "icon.png" type = "image/x-icon">
</head>
<body>
	<form action="form.php" method="POST">
		<div class="box">
			<h1>Register</h1>
			<div class="textbox">
				<i class="fa fa-user-circle" aria-hidden="true"></i>
				<input type="text" name="name1" placeholder="Full name" required>
			</div>

			<div class="textbox">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<input type="text" name="email1" placeholder="E-mail id" required>
			</div>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>

				<input type="text" name="uname1" placeholder="Create Username" required>
				
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="Password" name="passwd0" placeholder="Create Password" required>
			</div>

			<div class="textbox">
				<i class="fa fa-circle-o" aria-hidden="true"></i>
				<input type="Password" name="passwd1" placeholder="Re-type Password" required>
			</div>
			<button type="submit" class="btn">Register</button>
		</div>
	</form>
	<?php 
		session_start();
		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$name2 = validate($_POST["name1"]);
		$email2 = validate($_POST["email1"]);
		$uname2 = validate($_POST["uname1"]);
		$passwd2 = validate($_POST["passwd0"]);
		$passwd4 = validate($_POST["passwd1"]);

		$_SESSION['uname3'] = $uname2;
		$_SESSION['passwd3'] = $passwd2;
		$_SESSION['passwd5'] = $passwd4;
		$_SESSION['name3'] = $name2;
		$_SESSION['email3'] = $email2;
		if ($_SESSION['passwd3']!==$_SESSION['passwd5']) {
			# code...
			echo "<b class='error'>Password did not match</b>";
		}
		

	 ?>
</body>
</html>