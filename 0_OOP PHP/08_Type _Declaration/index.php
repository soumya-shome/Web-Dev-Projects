<?php
	declare(strict_types =1);
	include 'includes/autoLoader.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
	$person1= new Person();
	
	try{
		$person1->setName("2");
		echo $person1->getName();
	}catch(TypeError $e){
		echo "Error !: ".$e->getMessage();
	}
?>
</body>
</html>