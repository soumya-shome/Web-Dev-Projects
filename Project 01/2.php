<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php  
	if(isset($_REQUEST['button']))
	{
		$a=$_REQUEST['t1'];
		$b=$_REQUEST['tc'];
		$c=$_REQUEST['fs'];
		echo "<font color=".$b." size=".$c.">".$a."</font>";
	}
?>
<body>

<form method="post"><pre>
	Enter Text <input type="text" name="t1" placeholder="Enter Text">
	Enter Font color<input type="color" name="tc" placeholder="Enter color">
	Enter Font Size<input type="number" name="fs" placeholder="Enter size">
	<input  type="submit" name="button" value="Submit">
</pre>
</form>

</body>
</html>