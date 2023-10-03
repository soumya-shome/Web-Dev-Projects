<?php
require "connDB.php";
$r=mysqli_query($con,"SELECT * FROM `colony`");
?>
<table border="1">
	<thead>
		<tr>
			<th>Name</th>
			<th>Flat No.</th>
			<th>Special Id</th>
		</tr>
	</thead>
	<tbody>
<?php
while($row=mysqli_fetch_array($r)){
	?>
		<tr>
			<th><?php echo $row[0] ?></th>
			<th><?php echo $row[1] ?></th>
			<th><?php echo $row[2] ?></th>
		</tr>
	<?php
}
?>
	</tbody>
</table>