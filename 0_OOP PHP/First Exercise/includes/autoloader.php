<?php

spl_autoload_register('myAutoLoader');

/*function classLoader($class){
  $path = "classes/".$class.".php";
 include_once $path;
}*/


function myAutoLoader($className){
	$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	
	if(strpos($url,'includes') !== false){
		$path='../classes/';
	}
	else{
		$path='classes/';
	}
	$extension = '.php';
	include($path.$className.$extension);
}
?>