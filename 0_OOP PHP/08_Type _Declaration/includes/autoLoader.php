<?php

spl_autoload_register('classLoader');

function classLoader($class){
 $path = "includes/".$class.".class.php";
 include_once $path;
}

?>