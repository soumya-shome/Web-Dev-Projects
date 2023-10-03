<?php
	//spl_autoload_register('myAutoLoader');
	function myAutoLoader($className){
		$path = "classes/";
		$extension=".class.php";
		$fullPath = $path.$className.$extension;
		echo $fullPath;
		//include_once $fullPath ;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
	
	echo myAutoLoader("hello");
	$person1=new Person("DAniel",28);
	echo $person1->getPerson();
	
	echo "<br>";
	
	$house = new House("Johndoerroad",12);
	echo $house1->getAddress();
?>
</body>
</html>