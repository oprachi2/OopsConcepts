<?php
/*
Depedency injection is basically a procedure where one class can use the properties and methods of another class without using concept of inheritance
simply by injecting the the object  of another class on the given class.
*/
class Parent_class{ //parent Class
    public $fruit="apple"; 
    public function getValue(){
        return $this->fruit;
    }
}
class Base_class{
    public $fruit_name ="";
    function __construct(Parent_class $pclass) //injecting object of parent class in base class constructor
    {
        echo $pclass->getValue();
    }
}
$bclass=new Base_class(new Parent_class()); //it will include all the properties of parent class
echo $bclass->fruit_name; //variable of base class will get the value of the variable of parent class.
?>
