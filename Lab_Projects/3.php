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
		$d=$_REQUEST['styl'];
		
	}
?>
<body>
<form method="post"><pre>
	Enter Text <input type="text" name="t1" placeholder="Enter Text">
	Enter Font color<input type="color" name="tc" placeholder="Enter color">
	Enter Font Size<input type="number" name="fs" placeholder="Enter size">
	Enter Font STyle<select name="styl">
		<option value="Caliri">Calibri</option>
		<option value="Arial">Arial</option>
		<option value="Consolas">Consolas</option>
		<option value="Cooper">Cooper</option>
	</select>
	<?php 
	 if(isset($_REQUEST['button']))
	 {
		echo "<font color=".$b." size=".$c." face=".$d.">".$a."</font>";
	 }?><br>
	<input  type="submit" name="button" value="Submit">
</pre>
</form>

</body>
</html>