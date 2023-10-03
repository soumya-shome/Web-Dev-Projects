<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	if(isset($_REQUEST['b1'])){
		$n=$_REQUEST['g'];
		$l=strpos($n,'@');
		$nr=strrev($n);
		$l2=strpos($nr,'.');
		$l3=strpos($nr,'@');
		echo "User name: ";
		for($i=0;$i<$l;$i++){
			echo $n[$i];
		}
		$r2="";
		echo "<br/> Company name: ";
		for($i=$l2+1;$i<$l3;$i++){
			$r2.=$nr[$i];
		}
		echo strrev($r2)."<br/>";
	}
?>
<body>
	<form name="f1" method="get" action="">
	<p>Enter Your email</p><input type="email" placeholder="Enter Email" name="g">
	<p><input type="submit" value="Check" name="b1"></p>
</form>
</body>
</html>