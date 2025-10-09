<?php
$uczen = "uczen";
setcookie($uczen, "", time() - 3600, "/");
echo "Ciasteczko zotało usunięte";
?>