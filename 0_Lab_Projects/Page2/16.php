<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	if(isset($_REQUEST['b1'])){
		$n=$_REQUEST['g'];
		if($n=="12AB56"){
			session_start();
			
			header("Refresh:5,URL=17.php");
			echo "Login Successfull wait 5 secs..";
		}
		else{
			echo "Wrong Account Number";
		}
	}
?>
<body>
	<form name="f1" method="get" action="">
	<p>Enter Account Number</p><input type="text" placeholder="Enter Acc No." name="g">
	<p><input type="submit" value="Check" name="b1"></p>
</form>
</body>
</html>