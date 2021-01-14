<?php
	//check the availibility of the data
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	if(isset($_POST['fileName'])&& $_POST['fileData']){
		//save file
		$arr = explode("/",$_POST['fileName']);
		$path = "/var/www/html/".$arr[1];
		$myfile = fopen($path,'w') or die("Unable to open");
		fwrite($myfile,$_POST['fileData']);
		fclose($myfile);
		echo "File uploaded successfully";
	}
	else{
		echo "Error: File not uploaded to remote server";
	}
?>
