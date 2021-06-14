<?php
class Vegatables {
 public $name;
 public $color;
 public function __construct($name, $color) {
   $this->name = $name;
   $this->color = $color;
 }
 public function intro() {
   echo "The vegatable is {$this->name} and the colour is {$this->color}.";
 }
}
// Strawberry is inherited from Fruit
class Broccoli extends Vegatables {
 public function message() {
   echo "Broccoli nice to eat yes";
 }
}
$strawberry = new Broccoli("Broccoli", "green");
$strawberry->message();
$strawberry->intro();
?>