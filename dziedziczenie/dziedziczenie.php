<?php
class Strawberry extends Fruit {
    public function howToEat() {
        echo "Am I a fruit or a berry?";
    }
}
$strawberry = new Strawberry("strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>