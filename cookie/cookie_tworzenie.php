<p> Tworzymy ciasteczko o terminie ważności 1 dobra </p>

<?php
$cookie_name = "user";
$cookie_value = "John Doe";
$cookie_expire = time() + (24*60*60); //1day
setcookie($cookie_name, $cookie_value, $cookie_expire );
?>