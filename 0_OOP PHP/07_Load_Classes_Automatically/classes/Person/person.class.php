<?php

namespace Person;

class Person{
	private $name;
	private $eyecolor;
	private $age;
	
	public function __construct($name,$eyecolor,$age){
		$this->name=$name;
		$this->eyecolor=$eyecolor;
		$this->age=$age;
	}
	
	public function getPerson(){
		echo $this->name;
	}
	
}

?>