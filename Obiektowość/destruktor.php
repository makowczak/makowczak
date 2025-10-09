<?php
class fruit {
    // properties
    public $name;
    public $color;

    // methods
 function __construct($name) {
        $this->name = $name;
    }
  function __destruct() {
        echo "The fruit is:  {$this->name}.";
    }
}
$apple = new fruit("Apple");
?>