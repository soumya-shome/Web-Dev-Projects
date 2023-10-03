<?php
include_once("model/Model.php");
class Controller
{
public $m;
public function __construct()
{
$this->m = new Model();
}
public function invoke()
{
$result = $this->m->login(); //calling login() function of model class and
//store the return value in $result
if($result == 'Correct')
include 'view/home.php';
else
include 'view/login.php';
}
	}
?>