<?php
require("Connection.php");
$dno=$_POST["t1"];
$sql="delete from dept where deptno=".$dno;
$r=mysql_query($sql);
if(!$r)
{
	echo "Record Deletion Failed";
	die(mysql_error());
}
else{
	echo "Record deletion Successfull";
}
mysql_close($con);
?>