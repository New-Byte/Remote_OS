<!DOCTYPE html>
<html>
<head>
	<title>RemoteOS.com/reset</title>
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel = "icon" href = "icon.png" type = "image/x-icon">
</head>
<body>
	<form action="mail.php" method="POST">
		<div class="box">
			<?php if (isset($_GET['ins'])) {  ?>
			<b style="width: 280px;position: absolute;top: 5%;left: 10%;font-size: 15px;font-family: cursive;color: red;border: 2px solid #ccc;padding: 3px;border-radius: 5px;background-color: #F8D7CF;"><?php echo $_GET['ins']; ?></b>
			<?php } ?>
			<h1>Reset Password</h1>
			<div class="textbox">
				<i class="fa fa-user-circle" aria-hidden="true"></i>
				<input type="text" name="username" placeholder="Full name" required>
			</div>

			<div class="textbox">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<input type="text" name="email1" placeholder="E-mail id" required>
			</div>
			<button type="submit" class="btn">Send Email</button>
		</div>
	</form>
</body>
</html>