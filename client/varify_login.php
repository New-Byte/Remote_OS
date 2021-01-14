<?php
	include "database.php";
	session_start();
	if (isset($_POST['usr']) && isset($_POST['pass'])) {
		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$uname = validate($_POST['usr']);
		$passwd = validate($_POST['pass']);

		if(!(empty($uname) && empty($passwd))){
			$sql = "SELECT * FROM users WHERE username='$uname' AND password='$passwd'";

			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) === 1) {
				//site
				$row = mysqli_fetch_assoc($result);
				if ($row['username'] === $uname && $row['password'] === $passwd) {
					# code...
					$_SESSION['username'] = $row['username'];
					$_SESSION['password'] = $row['password'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['email'] = $row['email'];
					header("Location: site.php");
					exit();
				}

				else{
					header("Location: index.php?error=Incorrect Username or Password");
					exit();
				}

			}

			else{
				header("Location: index.php?error=Incorrect Username or Password");
				exit();
			}
		}
	}
	else{
		header("Location: index.php?error=Field is empty");
		exit();
	}

	?>
<title>RemoteOs.com/varify</title>