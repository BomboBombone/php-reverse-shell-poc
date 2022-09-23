 <?php
$filename = "admin.auth.inc.php";
$myfile = fopen($filename, "r") or die("Unable to open file!");
echo fread($myfile,filesize($filename));
fclose($myfile);
?> 
