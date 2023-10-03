<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	session_start();
	if(isset($_REQUEST['b1'])){
		$n=$_REQUEST['g'];
		if($n=="1234"){
			$_SESSION['baln']=10000;
			header("Refresh:5,URL=18.php");
			echo "Login Successfull wait 5 secs..";
		}
		else{
			header("Refresh:3,URL=16.php");
			echo "Login Failed wait 3 secs..";
		}
	}
?>
<body>
	<form name="f1" method="get" action="">
	<p>Enter PIN</p><input type="password " placeholder="Enter PIN" name="g">
	<p><input type="submit" value="Check" name="b1"></p>
</form>
</body>
</html>