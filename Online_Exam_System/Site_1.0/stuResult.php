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

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myAHome">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Examco.in</a></div>
<div class="collapse navbar-collapse" id="mySHome"> 
<ul class="nav navbar-nav">
<li class="#"><a href="stuHome.php">Home</a></li>
<li class="#"><a href="OE.php">Online Exam</a></li>
<li class="#"><a href="applyE.php">Apply for Exam</a></li>
<li class="#"><a href="admit.php">Admit Card</a></li>
<li class="active"><a href="stuResult.php">Result</a></li>
<li class="#"><a href="#">Display Profile</a></li>
</ul>
	<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Welcome  <?php echo $_SESSION['id'] ?></a></li>
			</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="logOut.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log Out</a></li>
</ul>
</div>
<div class="container-fluid">
<div id="myslide" class="carousel slide" data-ride="carousel">


</div>
</div>
</div>
</nav>
<div>
<?php
	
	$q="SELECT * FROM `result` WHERE `Student Id`='".$_SESSION['id']."'" ;
	$result=mysqli_query($con,$q);
$count=mysqli_num_rows($result);
if($count>0)
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

</tr>
<?php
while($row=mysqli_fetch_array($result)){

$eCode=$row[0];
$sId=$row[1];
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
	</tr>
<?php
}
}
else
{
	echo "Empty Table";
}
?>
</table>
	
</div>
	
</body>
</html>
