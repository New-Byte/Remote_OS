<?php  
	session_start();
	if (isset($_SESSION['username'])) {

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
		<a href="upload.php" style="background: #ddd;color: black;">Files</a>
		<a href="about.php">Manuals</a>
		<a href="feedback.php">Feedback</a>
		<a href="logout.php">Log Out</a>
	</nav>
	<div class="site">
		
      		<!-- Import link -->
		<div style="position: absolute;top: 10%; left: 43%;">
		    <a href="javascript:void(0);" onclick="formToggle('importFrm');" style="font-size: 20px;font-family: sans-serif;padding: 12px;border: 2px solid #4caf50;color: white;border-radius: 10px;background: #048A09;text-align: center;">Upload</a>
		</div>
		  
      		<!-- file upload form -->
		<div id="importFrm" style="display: none;">
		    <form action="datatransfer.php" method="post" enctype="multipart/form-data">
		        <input type="file" style="position: absolute;left:30%;top: 23%;font-size: 15px;font-family: cursive;padding: 12px;border: 2px solid #4caf50;font-weight: bold;color: black;background: #ccc;text-align: center;" name="file" />

		        <button type="submit" name="submit" style="position: absolute;left:60%;top: 23%;font-size: 15px;font-family: cursive;padding: 12px;border: 2px solid #4caf50;font-weight: bold;color: black;background: #ccc;text-align: center;">Upload File</button>
		    </form>
		</div>

		<!-- Import link -->
		<div style="position: absolute;top: 40%; left: 42%;">
		    <a href="javascript:void(0);" onclick="formToggle('importFrm1');" style="font-size: 20px;font-family: sans-serif;padding: 12px;border: 2px solid #4caf50;color: white;border-radius: 10px;background: #048A09;text-align: center;">Download</a>
		</div>
		<div id="importFrm1" style="display: none;">
		    <form action="download.php" method="post" enctype="multipart/form-data">
		        <input type="text" style="position: absolute;left:30%;top: 53%;font-size: 15px;font-family: cursive;padding: 12px;border: 2px solid #4caf50;font-weight: bold;color: black;text-align: center;" name="file1" placeholder="Enter a file name" />

		        <button type="submit" name="submit" style="position: absolute;left:60%;top: 53%;font-size: 15px;font-family: cursive;padding: 12px;border: 2px solid #4caf50;font-weight: bold;color: black;background: #ccc;text-align: center;">Download File</button>
		    </form>
		</div>
  <!-- Show/hide upload form -->
		<script>
		function formToggle(ID){
		    var element = document.getElementById(ID);
		    if(element.style.display === "none"){
		        element.style.display = "block";
		    }else{
		        element.style.display = "none";
		    }
		}
		</script>
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