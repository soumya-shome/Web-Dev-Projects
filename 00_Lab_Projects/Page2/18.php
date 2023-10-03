<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	session_start();
	if(isset($_REQUEST['b1'])){
		$n=$_REQUEST['r1'];
		$r=$_SESSION['baln'];
		$p=$_REQUEST['g'];
		if($n=="N"){
			echo ("Select a choice");
			echo $_SESSION['baln'];
		}
		elseif($n=="W"){
			if($p>=$r){
				echo ("Insufficient Balance");
			}
			else{
				echo $p." is Withdrawn";
				$_SESSION['baln']=$_SESSION['baln']-$p;
			}
		}
		elseif($n=="D"){
			echo $p." is Deposited";
			$_SESSION['baln']+=$p;
		}
		elseif($n=="C"){
			echo "Your Balance is ".$_SESSION['baln'];
		}
	}
?>
<body>
	<form name="f1" method="get" action="">
	<p><input type="radio" name="r1" value="N" checked>Choice<br><input type="radio" name="r1" value="C">Check Balance<br><input type="radio" name="r1" value="W">WithDraw<br><input type="radio" name="r1" value="D">Deposit</p>
	<p><input type="text" placeholder="Enter amount" name="g"></p>
	<p><input type="submit" value="OK" name="b1"></p>
</form>
</body>
</html>