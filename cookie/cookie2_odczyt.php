<p> Odczyt wartosc ciasteczka </p>
<?php
if(!isset($_COOKIE["user"])) {
    echo "cookie named " . $cookie_name . " is not set!";
} else {
    echo "cookie " . $cookie_name . " is set!<br>";
    echo "value is: " . $_COOKIE["user"];
}   
?>
