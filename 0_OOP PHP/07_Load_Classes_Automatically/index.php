<?php
include "includes/autoLoader.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
	//echo myAutoLoader("person");
	$person1=new Person\Person("Daniel","Blue",28);
	echo $person1->getPerson();
	
	echo "<br>";
	
	$house1 = new House("Johndoerroad",12);
	echo $house1->getAddress();
?>
</body>
</html>