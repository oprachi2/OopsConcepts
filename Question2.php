<?php

interface A{
	public function Item();
	public function ShowData();
}

abstract class B implements A{
	abstract function printdata();
	public function ShowData(){
		echo "Defining Method of Interface";
		return $this;
	}
}
class c extends B {
	public function printdata(){
		echo "Defining Abstract Method of Class B";
		return $this;
	}
	public function Item(){
		echo "Defining the Method Item From Class B which was Inherited from Interface A in class B";
		return $this;
	}
}
$a = new c();
$a->Item();
?>