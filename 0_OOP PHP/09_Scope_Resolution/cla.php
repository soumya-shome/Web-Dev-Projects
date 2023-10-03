<?php

class FirstClass{
	const Example = "You can't change this!";
	
	public static function test(){
		$testing ="This is a test!";
		return $testing;
	}
}

$a=FirstClass::Example;
echo $a;

class SecondClass extends FirstClass{
	public static $staticProperty="A static Property!";
	
	public static function anotherTest(){
		echo parent::Example;
		echo self::$staticProperty;
	}
}
$b = SecondClass::anotherTest();
echo $b;
?>