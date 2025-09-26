<?php
$myfile = fopen("ddd.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>