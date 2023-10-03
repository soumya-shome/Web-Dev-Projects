<?php

class Person{
	private $name;
	private $eyecolor;
	private $age;
	
	public static $drinkingAge = 21;
	
	public function __construct($name,$eyecolor,$age){
		$this->name=$name;
		$this->eyecolor=$eyecolor;
		$this->age=$age;
	}
	
	public function setName($name){
		$this->name=$name;
	}
	
	public function getDA(){
		return self::$drinkingAge;
	}
	
	public static function setDrinkingAge($newDA){
		self::$drinkingAge = $newDA;
	}
}

?>