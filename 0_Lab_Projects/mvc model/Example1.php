<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
class Model{
	public $data;
	public function __construct(){
		$this->data = "Hello World";
	}
}
class view{
	private $m;
	public function __construct(Model $mod){
		$this ->m = $mod;
	}
	public function display(){
		echo "<h1>".$this->m->data."</h1>";
	}
}
class controller{
	private $m;
	public function __construct(Model $model){
		$this->m=$model;
	}
}
	$model=new Model();
	$controller=new controller($model);
	$view = new View($model);
	
	echo $view->display();
	
?>
<body>
</body>
</html>