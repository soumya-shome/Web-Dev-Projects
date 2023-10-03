<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<?php
	include "person.php";
	?>
</head>

<body>
	<?php
		$person1=new Person();
		$person1->setName("Soumyadeep");
		echo $person1->name;
	
		$person2=new Person();
		$person2->setName("Shome");
		echo $person2->name;
	?>
	
</body>
</html>