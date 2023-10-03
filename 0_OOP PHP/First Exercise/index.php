<?php
	declare(strict_types = 1);
	include 'includes/autoloader.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
</head>

<body>
	<form action="includes/calc.php" method="post">
		<p>My Own Calculator</p>
		<input type="number" name="num1" placeholder="First number">
		<select name="oper">
			<option value="add">Additon</option>
			<option value="sub">Subtraction</option>
			<option value="div">Division</option>
			<option value="mul">Multiplication</option>
		</select>
		<input type="number" name="num2" placeholder="Second Numner">
		<button type="submit" name="submit">Calculate</button>
	</form>
</body>
</html>