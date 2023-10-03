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
		$r=0;
		while($n1!=0){
			$t=(int)($n1%10);
			$f=1;
			for($i=1;$i<=$t;$i++){
				$f=$f*$i;
			}
			$r=$r+$f;
			$n1=(int)($n1/10);
		}
		echo $r;
		if($n==$r){
			echo "Krishnamurty<br/>";
		}
		else{
			echo "Not Krishnamurty<br/>";
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