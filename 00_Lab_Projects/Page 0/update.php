<?php
require("Connection.php");
$sql="Select * from dept";
$result=mysql_query($sql);
?>
<form name="f1" method="post" action="edit.php">
Select Department <select name="s1">
	<?php
		while($row=mysql_fetch_array($result))
		{
			$dno=$row[0];
			$dnm=$row[1];
	?>
	<option value='<?php  echo $dno ?>'><?php echo $dnm ?></option>
	<?php
		}
	?>
	</select>
	<input type="submit" name="b1" value="Search">
</form>
<?php
mysql_close($con);
?>