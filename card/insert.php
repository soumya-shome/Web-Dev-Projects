<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	if(isset($_REQUEST['b1'])){
		require("connectDB.php");
		
		$name=$_REQUEST['nam'];
		$card=$_REQUEST['cardno'];
		$result = mysqli_query($con,"INSERT INTO `cardno` (`cardnon`, `name`) VALUES ('".$card."', '".$name."');");
		if($result)
		{
			echo "Data Inserted";
		}
		else{
			echo "Data Insertion Failed";
		}
 
	}
?>
<body>
	<form name="f1" method="post" action="">
		<p>Name:<input type="text" name="nam" ></p>
		<p>Card No:<input type="text" name="cardno"></p>
		<input type="submit" name="b1">	
	</form>
</body>
</html>