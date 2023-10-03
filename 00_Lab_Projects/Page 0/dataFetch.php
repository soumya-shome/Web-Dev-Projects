<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	require("Connection.php");
	$q="select * from dept";
	$result=mysql_query($q);
	$count=mysql_num_rows($result);
	if($count!=0){
	?>
	<h1>Detail Report</h1>
	<table border="1">
		<tr>
			<th>Dept No.</th>
			<th>Dept Name</th>
			<th>Location</th>
		</tr>
		<?php 
		while($row=mysql_fetch_array($result))
		{
			$dno=$row[0];
			$dname=$row[1];
			$loc=$row[2];
		?>
		<tr>
			<td><?php echo $dno ?></td>
			<td><?php echo $dname ?></td>
			<td><?php echo $loc ?></td>
		</tr>
		<?php
		}
	}
	else{
		echo "Empty table";
	}
	?>
	</table>
	<?php
	mysql_close($con);
?>
<body>
</body>
</html>