<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	include "person.php";
?>
<body>
<?php
	$person1 = new Person("Daniel","Blue",28);
	#echo $person1->name;
	#echo $person1->eyecolor;
	#$person1->setName("John");
	#echo $person1->name;
	
	echo $person1->getName();
?>
</body>
</html>