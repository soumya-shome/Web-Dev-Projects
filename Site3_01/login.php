<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	if(isset($_REQUEST['b1'])){
		require("connectDB.php");
		$a=0;
		$pass=$_REQUEST['pass'];
		$user=$_REQUEST['usr'];
		$result=mysqli_query($con,"select * from user_master");
		while($row=mysqli_fetch_array($result)){
			$mob=$row[0];
			$pas=$row[3];
			if(strcmp($mob,$user)==0)
			{
				$a=1;
				if(strcmp($pas,$pass)==0){
					if($row[4]=="user"){
						header("Refresh:3,URL=userlog.php");
						echo "Login Successful";
					}
					else{	
						header("Refresh:3,URL=adminlog.php");
						echo "Login Successful";
					}
				}
				else{
					echo "Wrong Password";
					break;
				}
			}
		}
		if($a==0){
			echo "Wrong Username or Password";
		}
	}
?>
<body>
	<form name="f1" method="post" action="">
		<p>LOG IN</p>
		<p>User ID: <input type="text" placeholder="User ID" name="usr"></p>
		<p>Password: <input type="password" placeholder="Password" name="pass"></p>
		<p><input type="submit" name="b1"> </p>
	</form>
</body>
</html>