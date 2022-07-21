<?php
class Cars{
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$figo = new Cars();
$bmw = new Cars();
$figo->set_name('Figo');
$bmw->set_name('BMW');

echo $figo->get_name();
echo "<br>";
echo $bmw->get_name();
?>
