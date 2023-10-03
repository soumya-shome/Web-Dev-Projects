<?php
	include 'includes/autoloader.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$testObj = new Test();
		$testObj->getUsers();
		$testObj->getUsersStmt("Daniel","Nielson");
		$testObj->setUsersStmt("John","Doe","1982-02-03");
	?>
</body>
</html>