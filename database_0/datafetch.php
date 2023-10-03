<?php
	session_start();
	require 'connection.php';
	$result=mysqli_query($con,"SELECT * FROM table1");
$count=mysqli_num_rows($result);
echo $count;
?>
<table border="1">
	<tr>
		<th>Name</th>
		<th>Roll</th>
		<th>Subject</th>
		<th>Class</th>
	</tr>
	<?php
		while($row=mysqli_fetch_array($result)){
			$name=$row[0];
			$roll=$row[1];
			$subject=$row[2];
			$class=$row[3];
	?>
	<tr>
		<td><?php echo $name?></td>
		<td><?php echo $roll?></td>
		<td><?php echo $subject?></td>
		<td><?php echo $class?></td>
	</tr>
	<?php
		}
	?>
</table>