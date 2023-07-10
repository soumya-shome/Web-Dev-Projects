<?php
require("connectDB.php");

$r=mysql_query("SELECT * FROM `course`");
session_start();
?>
<form method="post" action="createPaper2.php">
	Select Course <select name="s1">
	<?php
		while($row=mysql_fetch_array($r))
		{
			$ccode=$row[0];
	?>
		<option value='<?php  echo $ccode ?>'><?php echo $ccode?></option>
	<?php
		}
	?>
	</select>
	<input type="submit" value="Select" name="b1">	
</form>