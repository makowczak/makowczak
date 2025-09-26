<?php
$plik = 'licznik.txt';
if (file_exists($plik)) {
    $f = fopen($plik, 'r+');
    $licznik = (int)fgets($f);
    $licznik++;
    rewind($f);
    fputs($f, $licznik);
    fclose($f);
} else {
    $f = fopen($plik, 'w');
    $licznik = 1;
    fputs($f, $licznik);
    fclose($f);
}
echo "Liczba odwiedzin: $licznik++";
$plik_licznik = fopen($plik, 'w');
fputs($plik_licznik, $licznik);
fclose($plik_licznik);
?>