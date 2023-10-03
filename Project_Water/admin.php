<?php
require "connDB.php";
?>
<?php
if(isset($_REQUEST['b1'])){
	$r=mysqli_query($con,"SELECT * FROM `admin`");
	$row=mysqli_fetch_array($r);
	if(trim($_REQUEST['t1'])==$row[0]){
		if(trim($_REQUEST['t2'])==$row[1]){
			header("Location:admin_page.php");	
		}
	}
	else{
		echo "Wrong ID/Password<br>";
	}
}
?>
<form method="post" action=""><p>
	UserID : <input type="text" name="t1">
	Password : <input type="text" name="t2">
	<input type="submit" name="b1"></p>
</form>