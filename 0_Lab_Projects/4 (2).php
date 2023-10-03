<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php 
	if(isset($_REQUEST['sub']))
	{
		$use=$_REQUEST['user'];
		$pass=$_REQUEST['pass'];
		if($use=='admin' && $pass=='123')
		{
			echo("Login Successful");
		}
		else
		{
			echo("Login Failed");
		}
	}
?>

<body>
<h1>LOGIN</h1>
<form name="f1" method="post">
	Enter Name<input type="text" name="user"><br>
	Enter Password<input type="password" name="pass"><br>
	<input type="submit" name="sub" value="Submit">
	
</form>
</body>
</html>