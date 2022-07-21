<?php
class Mobile{
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$oneplus7 = new Mobile();
$oneplus7->set_name("The name of the mobile is Oneplus7");

echo $oneplus7->name;
?>
