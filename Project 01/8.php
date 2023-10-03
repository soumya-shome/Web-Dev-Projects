<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	static $num = 7;
	static $x=3;
	if(isset($_REQUEST['b1']))
	{
		$a=$_REQUEST['g'];
		if($num==$a){
			echo "<h1>Winner</h1>";
		}
		else{
			$x--;
			echo "Try Again.<br>You have ".$x." chances left.";
		}
	}

?>

<body>
<form name="f1" method="get" action="">
	<p>Enter Your guess</p><input type="text" placeholder="Enter Guess" name="g">
	<p><input type="submit" value="Check" name="b1"></p>
</form>
</body>
</html>