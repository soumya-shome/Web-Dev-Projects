<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	if(isset($_REQUEST['b1']))
	{
		$a=$_REQUEST['n1'];
		for($i=1;$i<=10;$i++)
		{
			$m=$a*$i;
			echo $a." x ".$i." = ".$m."<br>";
		}
	}
?>
<body>
<form name="f1" method="post" action="">
	Enter Number<input type="text" name="n1">
	<input type="submit" name="b1">
</form>
</body>
</html>