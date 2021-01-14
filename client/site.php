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
		<a href="site.php" style="background: #ddd;color: black;">Home</a>
		<a href="upload.php">Files</a>
		<a href="about.php">Manuals</a>
		<a href="feedback.php">Feedback</a>
		<a href="logout.php">Log Out</a>
	</nav>
	<div class="site">
		<form action="site.php" method="POST">
			<div>
				<h2 style="color: white;position: absolute;left: 40%;font-family: sans-serif;font-size: 20;">Command me</h2>
				<input type="text" name="cmd" placeholder="e.g.: whoami" style="width: 400px; height: 30px;font-size: 20px;font-family: cursive;padding: 8px 0;margin: 8px 0;overflow: hidden; position: absolute;left: 32%;top: 15%;border-radius: 15px;">
			</div>
			<button type="submit" style="position: absolute;left: 40%;top: 30%;border: 2px solid #4caf50;padding: 5px;font-size: 18px;background-color: #FFF;width: 200px;">Submit</button>
		</form>
		<h2 style="color: white;position: absolute;left: 45%;top: 40%;font-family: sans-serif;font-size: 20;">Output</h2>
		<?php
			$cmd = $_POST['cmd'];
			$data = trim($cmd);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			$curl_handle=curl_init();
			curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl_handle,CURLOPT_URL,'http://192.168.43.149');
			curl_setopt($curl_handle, CURLOPT_POST, 1);
		    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, "cmd=$cmd");
		    $res = curl_exec($curl_handle);
		    echo "<b class='ex1' style='font-family: sans-serif;color: #f2f2f2;font-weight: bolder;text-align: center;position: absolute;left: 25%;top: 50%;font-size: 20px;background-color: #433E3E;width: 600px;height: 250px;overflow: scroll;'>".$res."</b>";
		    curl_close($curl_handle);
		?>
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