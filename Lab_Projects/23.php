<?php 
	if(isset($_REQUEST['b1'])){
		$a=$_REQUEST['t1'];
		$a = date("d-m-Y", strtotime($a));
		echo $a;
	}
?>
<form method="post" action="">
	Date: <input type="date" name="t1">
	<br><input type="submit" name="b1">
</form>