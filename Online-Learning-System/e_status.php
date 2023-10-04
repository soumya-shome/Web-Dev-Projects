<?php
require "header bar.php";
?>
<div class="container-fluid">
	<?php
	$r=mysqli_query($con,"SELECT * FROM `exam`");
	$c=mysqli_num_rows($r);
	if($c>0){
	?>
	<table border="1" class="table-responsive">
		<thead>
			<tr>
				<th>Exam ID</th>
				<th>Exam Date</th>
				<th>Student ID</th>
				<th>Course ID</th>
				<th>Paper Type</th>
				<th>Status</th>
				<th>Settings</th>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
	<?php
	}
	else{
		echo "No Exam Data Available";
	}
		?>
	</div>	
</body>
</html>