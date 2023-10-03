<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	require("connectDB.php");
	$na="";
	if(isset($_REQUEST['b1'])){
		$na=$_REQUEST['n1'];
		$s="SELECT * FROM `all_names` WHERE `F_names`='".$na."'";
		$r1=mysqli_query($con,$s);
		$count=mysqli_num_rows($r1);
		if($count>0){
			$row1=mysqli_fetch_array($r1);
			echo $row1[1];			
			$s2="SELECT * FROM `all_names` WHERE `No`!='".$row1[0]."'";
			$r2=mysqli_query($con,$s2);
			$count2=mysqli_num_rows($r2);
			$a1=array();
			$b=0;
			while($row2=mysqli_fetch_array($r2)){
				$a1[$b]=$row2[0];
				$b++;
			}
			$c3=count($a1);
			//var_dump($a1);
			$a=rand(1,$c3);
			
			while($a==$row1[0]){
				$a=rand(1,$count2);
			}
			//echo "<br>random=".$a1[$a];
			
			$s3="SELECT * FROM `all_names` WHERE `No`='".$a1[$a]."'";
			$r3=mysqli_query($con,$s3);
			$row3=mysqli_fetch_array($r3);
			echo $row3[1];	
			
			mysqli_query($con,"INSERT INTO `santa`(`name1`, `name2`) VALUES ('".$row1[1]."','".$row3[1]."')");
			mysqli_query($con,"DELETE FROM `all_names` WHERE `No`='".$row1[0]."'");
			mysqli_query($con,"DELETE FROM `all_names` WHERE `No`='".$row3[0]."'");
		}
		else{
			echo "Not Found";
		}
	}
?>
<body>
	<div>
	<form method="post" action="">
		Name: <input type="text" name="n1">
		<input type="submit" value="Generate" name="b1">
	</form>
	</div>
	
	<div id="a">
	<?php
		if(isset($na)){
		
		}
		?>
	</div>
</body>
</html>