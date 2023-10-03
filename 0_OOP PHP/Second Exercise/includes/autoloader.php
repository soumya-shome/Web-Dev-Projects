<?php

spl_autoload_register('classLoader');

function classLoader($class){
 $path = "classes/".$class.".php";
 include_once $path;
}

?>