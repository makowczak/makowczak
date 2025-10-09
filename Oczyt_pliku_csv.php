<?php
$plik fopen("owoce.csv", "r");
$wiesz fgetcsv($plik);
$owoce explode(";", $wiesz);
foreach ($owoce as $owoc) {
    echo $owoc . "<br>";
}   
var_dump($owoce);
?>