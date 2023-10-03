<!doctype html>
<html>
<head>
<title>Home</title>
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
</head>
	<?php
	require("connectDB.php");
	session_start();
	?>
<body>
<div class="row">
<div class="col-md-12"><img src="Images/carousel-banner-2.jpg" alt="" width="1000"></div>
</div>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mySHome">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Examco.in</a></div>
<div class="collapse navbar-collapse" id="mySHome"> 
<ul class="nav navbar-nav">
<li class="#"><a href="stuHome.php">Home</a></li>
<li class="active"><a href="OE.php">Online Exam</a></li>
<li class="#"><a href="applyE.php">Apply for Exam</a></li>
<li class="#"><a href="admit.php">Admit Card</a></li>
<li class="#"><a href="stuResult.php">Result</a></li>
<li class="#"><a href="#">Display Profile</a></li>
</ul>
	<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Welcome  <?php echo $_SESSION['id'] ?></a></li>
			</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="logOut.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log Out</a></li>
</ul>
</div>

	
</div>
</nav>
	<div>
	
<?php
	$r=mysqli_query($con,"SELECT * FROM `exam` WHERE `Student Id`='".$_SESSION['id']."' AND`Exam Status`='Incomplete';");
	$ro=mysqli_fetch_array($r);
	mysqli_query($con,"UPDATE `exam` SET `Exam Status`='Complete' WHERE `Exam Code`='".$ro[0]."'");
	$b=array();
	$qno=0;
	$cq=0;
	$wq=0;
	$j=0;
	$grade='';
	$stat="";
	$paper= $_SESSION['op'];				
	for($i=1;$i<$_SESSION['q1'];$i+=1){
		$b[$i-1]=trim($_REQUEST['r'.$i]);
	}
	$result=mysqli_query($con,"SELECT * FROM `question` WHERE `Paper Code`= '".$paper."'");
	$result2=mysqli_query($con,"SELECT * FROM `paper` WHERE `P_CODE`= '".$paper."'");
	$row2=mysqli_fetch_array($result2);
	$time=$row2[4];
	$nm=$row2[6];
	while($row3=mysqli_fetch_array($result)){
		$q=trim($row3[6]);
		$qno=$qno+1;
		if($b[$j]===$q){
			$cq=$cq+1;
		}
		else if($b[$j]==0){
			$cq=$cq+0;
		}
		else{
			$wq=$wq+1;
		}
		$j=$j+1;
	}
	$tot=$qno*5;
	$n=$wq*$nm;
	$tom=($cq*5)-$n;
	
	$pe=($tom/$tot)*100;
	if ($pe>=90){
		$grade='A';
	}
	elseif ($pe<90 && $pe>=70){
		$grade='B';
	}
	elseif ($pe<70 && $pe>=50){
		$grade='C';
	}
	elseif ($pe<50 && $pe>=40){
		$grade='D';
	}
	elseif ($pe<90 && $pe>=70){
		$grade='B';
	}
	if($pe>=40){
		$stat="Pass";
	}
	else{
		$stat="Fail";
	}
	echo "<h1>Exam Complete</h1>";
	echo "Exam Code =".$ro[0]."<br>";
	echo "Total Marks=".$tot."<br>";
	echo "Marks=".$tom."<br>";
	echo $pe."<br>";
	echo "Grade : ".$grade."<br>";
	echo "You have ".$stat."ed the Exam<br>";
	$s="INSERT INTO `result`(`Exam Code`, `Student Id`, `Total no, of questions`, `No. of attempts`, `No. of wrong answers`, `No. of correct answers`, `Negative Marks`, `Percentage`, `GRADE`, `Status`) VALUES ('".$ro[0]."','".$_SESSION['id']."','".$qno."','".$qno."','".$wq."','".$cq."','".$n."','".$pe."','".$grade."','".$stat."')";
	mysqli_query($con,$s);
?>
	</div>
</body>
</html>