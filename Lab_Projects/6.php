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
		echo "Factors are - ";
		for($i=1;$i<$a;$i++)
		{
			if($a%$i==0)
			{
				echo $i." , ";
			}
		}
		echo $a;
	}
?>
<body>
<form name="f1" method="post" action="">
	Enter Number<input type="text" name="n1">
	<input type="submit" name="b1">
</form>
</body>
</html>