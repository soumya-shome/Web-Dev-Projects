<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php 
	if(isset($_REQUEST['sub']))
	{
		$msg;
		$use=$_REQUEST['user'];
		$pass=$_REQUEST['pass'];
		if($use=='admin' && $pass=='123')
		{
			$msg=1;
		}
		else
		{
			$msg=0;
			//echo deta."Failed";
		}
	}
?>

<body>
<h1>LOGIN</h1>
<form name="f1" method="post">
	Enter Name<input type="text" name="user"><br>
	Enter Password<input type="password" name="pass"><br>
	<div id="deta">
	<?php 
		if(isset($msg))
		{
		if($msg==1)
		echo "Successfull";
		elseif($msg==0)
			echo "Failed";
		}
		?></div>
	<input type="submit" name="sub" value="Submit">
</form>
</body>
</html>