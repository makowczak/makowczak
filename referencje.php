<?php 
function add_some_extra(&$string) {
    $string .= ' + some extra stuff';
}
$str = 'This is a string';
add_some_extra($str);
echo $str; // outputs 'This is a string + some extra stuff'
?>