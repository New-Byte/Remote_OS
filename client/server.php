<?php  
	session_start();
	if (isset($_SESSION['username'])) {
		# code...
?>
<!DOCTYPE html>
<html>
<head>
	<title>RemoteOS.com</title>
	<link rel="stylesheet" type="text/css" href="site.css">
	<link rel = "icon" href = "icon.png" type = "image/x-icon">
</head>
<body>
	<nav class="navbar">
		<img src="icon.png" width="80" class="logo2" alt="Website-Logo">
		<h1 class="logo1">RemoteOS</h1>
		<a href="profile.php"><h4 align="right"><?php echo $_SESSION['name']; ?></h4></a><br><br><br><br>
		<i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>
	</nav>
	<nav class="nav">
		<a href="site.php">Home</a>
		<a href="upload.php">Upload</a>
		<a href="server.php" style="background: #ddd;color: black;">Add Server</a>
		<a href="about.php">About Us</a>
		<a href="feedback.php">Feedback</a>
		<a href="logout.php">Log Out</a>
	</nav>
	<div class="site">
		<h2 style="color: white;position: absolute;left: 40%;font-family: sans-serif;font-size: 20;">Facility for client to add server</h2>
	</div>
</body>
</html>
<?php  
	}
	else{
		header("Location: index.php");
		exit();
	}
?>