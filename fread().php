<?php
$myfile = fopen("ddd.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("ddd.txt"));
fclose($myfile);
?>