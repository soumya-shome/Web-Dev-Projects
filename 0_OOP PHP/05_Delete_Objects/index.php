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
	$object= new NewClass;
	unset($object);
	echo $object->getProperty();
?>
</body>
</html>