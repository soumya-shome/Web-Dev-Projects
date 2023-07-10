<!doctype html>
<html>
<head>
<title>Student Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.navbar{
	border-radius:1;
	background-color: #03033C;
	}		
</style>
	
	<?php
	require("connectDB.php");
	session_start();
	?>
</head>
<body>
<div class="row">
<div class="col-md-12"><img src="Images/carousel-banner-2.jpg" alt="" width="1000"></div>
</div>

<?php
require "header bar2.php";
?>
<div>
<?php
	
	$q="SELECT * FROM `result` WHERE `st_id`='".$_SESSION['id']."'" ;
	$result=mysqli_query($con,$q);
$count=mysqli_num_rows($result);
if($count>0)
{
?>
<h1> EXAM REPORT</h1>
<table border = '1'>
	<thead>
		<tr>
			<th>Student name</th>
			<th>Exam Code</th>
			<th>Grade</th>
			<th>Percentage</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
	
<?php
while($row=mysqli_fetch_array($result)){
?>
<tr>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[0]?></td>
	<td><?php echo $row[8]?></td>
	<td><?php echo $row[9]?></td>
	<td><?php echo $row[10]?></td>
</tr>
		<?php
	}	
		?>
		</tbody>
<?php

}
else
{
	echo "<h3>No Result is Available</h3>";
}
?>
</table>
	
</div>
	
</body>
</html>
