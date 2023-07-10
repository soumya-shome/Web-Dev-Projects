<!doctype html>
<html>
<head>
<title>Admin Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
mtcap=new Array('A','a','B','b','C','c','D','d','E','e','F','f','G','g','H','h','I','i','J','j','K','k','L','l','M','m','N','n','O','o','P','p','Q','q','R','r','S','s','T','t','U','u','V','v','W','w','X','x','Y','y','Z','z','0','1','2','3','4','5','6','7','8','9')
var captcha;
 
function generateCaptcha() {
    var a = mtcap[Math.floor(Math.random()*mtcap.length)];
    var b = mtcap[Math.floor(Math.random()*mtcap.length)];
    var c = mtcap[Math.floor(Math.random()*mtcap.length)];
    var d = mtcap[Math.floor(Math.random()*mtcap.length)];
 	var e = mtcap[Math.floor(Math.random()*mtcap.length)];
	
	captcha=a.toString()+b.toString()+c.toString()+d.toString()+e.toString();
	
    document.getElementById("captcha").value = captcha;
}
 
function check(){
	var input=document.getElementById("inputText").value;
 
	if(input==captcha){
		alert("Equal");
	}
	else{
		alert("Not Equal");
	}
}
</script>
<style>
.navbar{
	border-radius:1;
	background-color: #03033C;
	}		
</style>
<script type="text/javascript">  
  //  $(function () {  
      //  $(document).keydown(function (e) {  
      //      return (e.which || e.keyCode) != 116;  
      //  });  
   // });  
//	window.open ("http://localhost/1.%20Online%20Exam%20System/Online%20Exam/sche4.php","mywindow","status=1,toolbar=0");
</script> 
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
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myAHome">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Examco.in</a>
		</div>
		<div class="collapse navbar-collapse" id="myAHome"> 
			<ul class="nav navbar-nav">
				<li class="#"><a href="adminHome.php">Home</a></li>
				<li class="active"><a href="sche.php">Schedule Exam</a></li>
				<li class="#"><a href="Result.php">Result</a></li>
				<li class="#"><a href="createP.php">Create Question Set</a></li>
				<li class="#"><a href="viewCourse2.php">Add Questions</a></li>
				<li class="#"><a href="viewCourse.php">View Question Paper</a></li>
				<li class="#"><a href="#">Students</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right ">
				<li><a href="#">Welcome  <?php echo $_SESSION['id'] ?></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="logOut.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
			</ul>
		</div>
		<div class="container-fluid">
			<div id="myslide" class="carousel slide" data-ride="carousel"></div>
		</div>
	</div>
</nav>
	
<div>
<?php
	if(isset($_SESSION['s1'])){
		$_SESSION['s2']=$_REQUEST['n1'];
		$_SESSION['s3']=$_REQUEST['d'];	
		$_SESSION['ty']=$_REQUEST['cap'];
		$ma=NULL;
		$r=mysqli_query($con,"SELECT * FROM `exam` WHERE `Exam Code`='".$_SESSION['s1']."'");
		$r2=mysqli_query($con,"SELECT `MAC_NO` FROM `machine_allotment` WHERE `EXAM_DATE`='".$_SESSION['s3']."' AND `EXAM_ALOT`='".$_SESSION['s2']."'");
		$row=mysqli_fetch_array($r);
		$r3=mysqli_query($con,"SELECT * FROM `paper` WHERE `C_ID`='".$row[5]."'");
		$r4=mysqli_query($con,"SELECT * FROM `machine`");
		$count=mysqli_num_rows($r2);
		$count2=mysqli_num_rows($r4);
		if($count<$count2){
			$ma="M".($count+1);
			$c3=mysqli_num_rows($r3);						
			$c=substr($row[5],3,2);
			$co=strlen($row[5]);
			$q=$c.chr(64+(rand(1,$c3)));
			$pcode="P10".$q;
			$s1="UPDATE `exam` SET `Exam Date`='".$_SESSION['s3']."',`Exam Slot`='".$_SESSION['s2']."',`Paper Code`='".$pcode."',`Exam Status`='Incomplete',`Machine No.`='".$ma."',`Activation No.`='".$_SESSION['ty']."' WHERE `Exam Code`='".$_SESSION['s1']."'";
			$s2="INSERT INTO `machine_allotment`(`EXAM_DATE`, `EXAM_ALOT`, `MAC_NO`) VALUES ('".$_SESSION['s3']."','".$_SESSION['s2']."','".$ma."')";
			//echo $s1."<br>".$s2;
			$q2= mysqli_query($con,$s1);
			$q3=mysqli_query($con,$s2);
?>
		<h2>:Exam Details:</h2>
		<h4>Exam Code:<?php echo $_SESSION['s1'] ?></h4>
		<h4>Course ID:<?php echo $row[5] ?></h4>
		<!--<h4>Paper Code:<?php// echo $pcode ?></h4>-->
		<h4>Exam Date:<?php echo $_SESSION['s3'] ?></h4>
		<h4>Exam Slot:<?php echo $_SESSION['s2'] ?></h4>
		<h4>Machine No.:<?php echo $ma ?></h4>
<?php
			if($q2 && $q3){
				echo "<h3>Scheduled Successfully</h3>";
				$_SESSION['s1']=NULL;
			}
			else{
				echo "<h3>Scheduled Unsuccessfull</h3>";
			}
		}
			else{
			echo "<h3>Choose Another Date</h3>";
		}
	}
	else{
		header("Location:sche.php");
	}
?>
</div>
</body>
</html>
