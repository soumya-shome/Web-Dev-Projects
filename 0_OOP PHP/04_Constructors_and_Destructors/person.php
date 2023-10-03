<?php

class Person{
	
	#public $name;
	#public $eyecolor;
	#public $age;
	
	private $name;
	private $eyecolor;
	private $age;
	
	public function __construct ($name,$eyecolor,$age){
		$this->name = $name;
		$this->eyecolor = $eyecolor;
		$this->age = $age;
	}
	
	public function setName($name){
		$this->name=$name;	
	}
	
	public function getName(){
		return $this->name;
	}
}
?>