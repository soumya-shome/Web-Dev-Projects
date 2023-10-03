<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	if(isset($_REQUEST['b1']))
	{
		$a=$_REQUEST['n1'];
		$spell="";
		while($a!=0)
		{
			$t=$a%10;
			switch($t)
			{
				case 0:
					$spell="zero ".$spell;
				break;
					
				case 1:
					$spell="one ".$spell;
				break;
					
				case 2:
					$spell="two ".$spell;
				break;
					
				case 3:
					$spell="three ".$spell;
				break;
				
				case 4:
					$spell="four ".$spell;
				break;
					
				case 5:
					$spell="five ".$spell;
				break;
					
				case 6:
					$spell="six ".$spell;
				break;
					
				case 7:
					$spell="seven ".$spell;
				break;
				
				case 8:
					$spell="eight ".$spell;
				break;
					
				case 9:
					$spell="nine ".$spell;
				break;
			}
			$a=(int)($a/10);
		}
		echo "Result=".$spell;
		
	}
?>
<body>
<form name="f1" method="post" action="">
	Enter Number<input type="text" name="n1">
	<input type="submit" name="b1">
</form>
</body>
</html>