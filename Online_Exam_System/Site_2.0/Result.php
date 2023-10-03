<?php
require "header bar.php";
?>
<div class="container-fluid">
<?php
	$q="SELECT * FROM `result`" ;
	$result=mysqli_query($con,$q);
$count=mysqli_num_rows($result);
if($count!=0)
{
?>
<h1> EXAM REPORT</h1>
<table border = '1'>
<tr>
<th>Student name</th>
<th>Exam Code</th>
<th>Grade</th>
<th>Percentage</th>
<th>Status</th>
<th>Total Questions</th>
	<th>No of Attempts</th>
	<th>No of Correct Answers</th>
	<th>No of Wrong Answers</th>
	<th>Negative Marks</th>
</tr>
<?php
while($row=mysqli_fetch_array($result))
{
$eCode=$row[0];
$sId=$row[1];
$nQ=$row[2];
$nWA=$row[3];
$nCA=$row[4];
$nM=$row[5];
$j=$row[6];
$pC=$row[7];
$grade=$row[8];
$status=$row[9];
?>
<tr>
<td><?php echo $sId?></td>
<td><?php echo $eCode?></td>
<td><?php echo $grade?></td>
<td><?php echo $pC?></td>
<td><?php echo $status?></td>
<td><?php echo $nQ?></td>
<td><?php echo $nWA?></td>
<td><?php echo $nCA?></td>
<td><?php echo $nM?></td>
<td><?php echo $j?></td>
	</tr>
<?php
}
}
else
{
	echo "<h2>No Result Available</h2>";
}
?>
</table>
	
</div>
	
</body>
</html>
