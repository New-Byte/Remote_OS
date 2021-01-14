<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content = "This website provides you with best deals and offers. The paradise on earth. Get anything you wish for in affordable price.">
	<title>RemoteOs.com/login</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel = "icon" href = "icon.png" type = "image/x-icon">
</head>
<body>
	<form action="varify_login.php" method="POST">
		<div class="login-box">
			<h1>Login</h1>
			<?php if (isset($_GET['error'])) {  ?>
			<b style="width: 280px;position: absolute;top: 5%;left: 10%;font-size: 15px;font-family: cursive;color: red;border: 2px solid #ccc;padding: 3px;border-radius: 5px;background-color: #F8D7CF;"><?php echo $_GET['error']; ?></b>
			<?php } ?> 
			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>

				<input type="text" name="usr" value="" placeholder="Username" required>
			</div>
			<div class="textbox">

				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="pass" value="" placeholder="Password" required>
			</div>
			<button class="btn">LogIn</button>
			<a href="form.php">Register</a>
			<br/>
			<br/>
			<a href="reset.php" >Forgot Password ?</a>
		</div>
	</form>
</body>
</html>