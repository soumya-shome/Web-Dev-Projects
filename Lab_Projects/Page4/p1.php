<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	$a=0;
	$no=0;
	require("connectDB.php");
	if(isset($_REQUEST['s'])){
		session_start();
		$n=$_REQUEST['mn'];
		$res=mysqli_query($con,"SELECT * FROM `post_paid`;");
		while($row=mysqli_fetch_array($res)){
			if($n == $row[0]){
				$a=1;
				$_SESSION['mob']=$row[0];
			}
		}
		if($a==0){
			echo "NOT FOUND";
		}
	}
?>
<body>
	<span name="s1">
		<?php
			if($a==1){
		?>
			<form method="post" action="p2.php">
				Current Amount : <input type="text" name="C">
				<input type="submit" value="Generate">
		</form>		
		<?php
			}else{
		?>
		<form method="post" name="f1" action="">
		Mobile No: <input type="text" name="mn">
		<input type="submit" value="Search" name="s">
	</form>	
		<?php
			}
		?>
	</span>
</body>
</html> 