<!DOCTYPE html>
<html>
<head>
    <title>DataTransfer</title>
</head>
<body style="background: black;">

</body>
</html>
<?php
if(isset($_POST["submit"])){
    // Move file to a temp location
    $uploadDir = "upload/";
    $uploadFile = $uploadDir.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);
    $myfile = fopen($uploadFile, "r") or die("Unable to open file!");
    $read = fread($myfile,filesize($uploadFile));
    fclose($myfile);
    if (!(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile))){
        
        // set array to send data to remote server
        $remoteData = array(
            'fileName' => $uploadFile,
            'fileData' => $read
        );

        // start curl set up for remote file upload
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'http://192.168.43.149/server.php');
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $remoteData);
        $response = curl_exec($curl);
        curl_close($curl);
        echo "<h1 align='center' style='color: white;'>".$response."</h1>";   // set response to server.php file 
    }else {
        echo "<h1 align='center' style='color: white;'>Your file not uploaded to server.</h1>";
    }
} ?> 
