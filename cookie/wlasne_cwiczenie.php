<?php
$uczen = "user";
$wartosc = "Mateusz";
$data_waznosci = time() + (15 * 24 * 60 * 60); // 15 dni

setcookie("uczen", $wartosc, $data_waznosci, "/");

echo "Ciasteczko 'uczen' zostało utworzone.";
?>