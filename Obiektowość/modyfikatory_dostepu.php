<?php
class fruit{
    public $name;
    private $color;
    protected $weight;

    
}
$mango = new fruit();
$mango->name = "Mango"; // OK
$mango->color = "Yellow"; // ERROR
$mango->weight = "300"; // ERROR
?>
