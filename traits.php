<?php
/*Traits are used to declare methods that can be used in multiple classes. 
Traits can have methods and abstract methods that can be used in multiple classes, 
and the methods can have any access modifier (public, private, or protected). */
trait demo {
public function message() {
    echo " Traits are used to declare methods that can be used in multiple classes. ";
  }
}

class  fun {
  use demo;
  public function message2() {
    echo " Traits are used for multiple inheritance ";
  }

}
$obj = new fun();
$obj->message();
$obj->message2();

?>
