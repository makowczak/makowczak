<?php 
echo preg_replace_callback(‘~-([a-z])~’, function ($match) {
}, ‘hello-world’);
?>
