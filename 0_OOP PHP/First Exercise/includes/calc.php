<?php
declare (strict_types=1);
include 'autoloader.php';

$oper=$_REQUEST['oper'];
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];

$calc = new Calc($oper,(int)$num1,(int)$num2);

try{
	echo $calc->calculator();
}catch(TypeError $e){
	echo "Error!: ".$e->getMessage();
}

?>