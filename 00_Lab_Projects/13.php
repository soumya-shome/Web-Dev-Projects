<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	if(isset($_REQUEST['b1'])){
		$n=$_REQUEST['g'];
		$n1=$n;
		$l=strlen($n1);
		$p=pow(10,$l-1);
		$m=(int)($n1/$p);
		$a=pow($m,2);
		$b=$n1%$p;
		if($a==$b){
			echo "True<br/>".$m."<br/>".$b."<br/>";
		}
		else{
			echo "False<br/>";
		}
	}
?>
<body>
	<form name="f1" method="get" action="">
	<p>Enter Your Number</p><input type="text" placeholder="Enter Number" name="g">
	<p><input type="submit" value="Check" name="b1"></p>
</form>
</body>
</html>