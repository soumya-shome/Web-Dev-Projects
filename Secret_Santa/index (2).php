<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
	
<body>
	<!--<form type="post" action="">
  <div class="form-group col-md-5" >
    <br><label for="e1">Name: </label>
    <input type="text" class="form-control" id="e1" name="n1">
  </div>
  <br><button type="submit" class="btn btn-primary" name="b1">Generate</button>
</form>-->
	<br><br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-5 panel panel-default">
		<h1 class="text-capitalize">Secret Santa</h1>
		<form action="">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="n1">
  </div>
  <button type="submit" class="btn btn-primary" name="b1">Generate</button>
			<button type="reset" class="btn btn-primary" >Clear</button>
</form>
		<br>
	</div>
	</div>
	
<?php
	require("connectDB.php");
	$na="";
	
	if(isset($_REQUEST['b1'])){
		$na=$_REQUEST['n1'];
		
		$r1=mysqli_query($con,"SELECT * FROM `all_names` WHERE `F_names`='".$na."'");
		$count=mysqli_num_rows($r1);
		
		if($count>0){
			$row1=mysqli_fetch_array($r1);//inputed name
			
			$r4=mysqli_query($con,"SELECT * FROM `giver` WHERE `Name`='".$na."'");
			$count3=mysqli_num_rows($r4);
			if($count3>0)
			{
				$r2=mysqli_query($con,"SELECT `No` FROM `receiver` WHERE `Name`!='".$row1[1]."'");
				$count2=mysqli_num_rows($r2);
				$a1=array();
				$b=0;

				while($row2=mysqli_fetch_array($r2)){
					$a1[$b]=$row2[0];
					$b++;
				}
				$c3=count($a1);
				$a=rand(0,$c3);
				$a=rand(0,$count2-1);

				$r3=mysqli_query($con,"SELECT `Name` FROM `receiver` WHERE `No`='".$a1[$a]."'");
				$row3=mysqli_fetch_array($r3);
				
				?>
		<div class="panel panel-default col-md-4">
	  <div class="panel-heading">Giver</div>
  <div class="panel-body"><?php echo $row1[1] ?></div>
</div>
	<div class="panel panel-default col-md-4">
  <div class="panel-heading">Receiver</div>
  <div class="panel-body"><?php echo $row3[0] ?></div>
</div><br>
	<form action="" class="col-md-4"">
		<button type="submit" class="btn btn-primary">Clear</button>
	</form>
	
	<?php
				
				mysqli_query($con,"INSERT INTO `santa` (`No`, `Giver`, `Receiver`) VALUES (NULL,'".$row1[1]."','".$row3[0]."')");
				mysqli_query($con,"DELETE FROM `giver` WHERE `Name`='".$row1[1]."'");
				mysqli_query($con,"DELETE FROM `receiver` WHERE `Name`='".$row3[0]."'");
			}
			else{
				?>
	<div class="col-md-10"><?php echo "Already Assigned"?></div>
		<?php	
			}
		}
		else{
			?>
	<div class="col-md-10"><?php echo "Name Not Found"?></div>
		<?php	
		}
	}
?>
</body>
</html>