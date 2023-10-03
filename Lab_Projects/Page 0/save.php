<?php
require("Connection.php");
$dno=$_POST["t1"];
$dname=$_POST["t2"];
$loc=$_POST["t3"];
$sql="update dept set dname='".$dname."',loc='".$loc."' where deptno=".$dno;
$r=mysql_query($sql);
if(!$r){
	echo "Record updation Failed";
	die (mysql_error());
}
else{
	echo "REcord Updates Successfully";
}
mysql_close($con);
?>