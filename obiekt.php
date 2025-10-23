<?php
class fruit{

    public $name;
    public $color;
    function set_name($name){
        $this->name = $name;

    }
    function get_name(){
        return $this->name;
    }
}   
    $apple = new fruit();
$bannana = new fruit();
$apple->set_name("Apple");
$bannana->set_name("Bannana");
echo $apple->get_name();
echo "<br>";
echo $bannana->get_name("");


?>