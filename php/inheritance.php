<?php
class Father {
  public $name;
  public $age;
  
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
  public function intro() {
    echo "The name of the Father is {$this->name} and the age is {$this->age}.";
  }
}


class Son extends Father {
  public function message() {
    echo "Hello";
  }
}
$son = new Son("Harry", "45");
$son->message();
$son->intro();
?>
