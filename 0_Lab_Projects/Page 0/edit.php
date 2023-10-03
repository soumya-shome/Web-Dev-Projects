<?php
require("Connection.php");
$dno=$_POST["s1"];
$sql="select * from dept where deptno=".$dno;
$result=mysql_query($sql);
?>
<form name="f1" method="post" action="save.php">
	<table border="0">
	<?php
		while($row=mysql_fetch_array($result)){
			$dno=$row[0];
			$dname=$row[1];
			$loc=$row[2];
	?>
	<tr><th>Department No</th><td><input type="text" name="t1" value="<?php echo $dno ?>" readonly></td></tr>
	<tr><th>Dept Name</th><td><input type="text" name="t2" value="<?php echo $dname ?>"></td></tr>
	<tr><th>Location</th><td><input type="text" name="t3" value="<?php echo $loc ?>"> </td></tr>
	<tr><td><input type="submit" value="update now"></td></tr>
	</table>
</form>
<?php
mysql_close($con);		
?>