<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php
	session_start();
	if(isset($_REQUEST['b1'])){
		$_SESSION['val']=7;
		$num=$_REQUEST['g'];
		$_SESSION['g2']=0;
		if(isset($_SESSION['count']))
		{
			if($num==$_SESSION['val'])
			{
				echo "You have won the game";
				session_destroy();
				echo "<br>Press Check to restart the game";
			}
			else{
				$_SESSION['count']-=1;
				echo "You have ".$_SESSION['count']." chances left";
				if($_SESSION['count']==0)
				{
					echo "<br>You have lost the game";
					session_unset();
					session_destroy();
					echo "<br>Press Check to restart the game";
				}
			}
		}
		else
			$_SESSION['count']=3;
	
		$_SESSION['user_val']=$num;
	}
	
?>
<body>
<form method="post" action="">
	
	<p>Enter Your guess</p><input type="text" placeholder="Enter Guess" name="g">
	<p><input type="submit" value="Check" name="b1"></p>
</form>

</body>
</html>