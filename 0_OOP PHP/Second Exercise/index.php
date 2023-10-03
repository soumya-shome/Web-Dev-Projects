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
		/*$testObj = new Test();
		$testObj->getUsers();
		$testObj->getUsersStmt("Daniel","Nielson");
		$testObj->setUsersStmt("John","Doe","1982-02-03");*/
		$usersObj = new UsersView();
		$usersObj->showUser("Daniel");
	
		//$usersObj2 = new UsersContr();
		//$usersObj2->createUser("Jane","Doe","1834-05-11");
	?>
</body>
</html>