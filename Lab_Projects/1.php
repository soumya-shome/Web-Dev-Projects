<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php
	$a='white';
	if(isset($_POST['sub']))
	{
		$a=$_POST['bgcolour'];
		echo("The color is ".$a);
	}
?>

<body bgcolor='<?php echo($a)?>'>
	<form method="post" name="f1"><pre>
		<select name="bgcolour">
			<option value="0">Select Color</option>
			<option value="Red">Red</option>
			<option value="Blue">Blue</option>
			<option value="Yellow">Yellow</option>
			<option value="Green">Green</option>
			<option value="Violet">Violet</option>
		</select>
		<input type="submit" name="sub" value="color">
	</pre></form>
</body>
</html>