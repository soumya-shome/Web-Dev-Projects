<?php

class Person{
	public $first = "Daniel";
	protected $last = "Nielson";
	private $age = "28";
	
	
}

class Pet extends Person {
	public function owner(){
		$a = $this->last;
		return $a;
	}
}
?>