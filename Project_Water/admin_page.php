<?php
require("connDB.php");

if(isset($_REQUEST['b1'])){
	$flat=$_REQUEST['t1'];
	$r=mysqli_query($con,"INSERT INTO `flat`(`flat no`) VALUES ('".$flat."')");
	if($r){
		echo "Success";
	}else{
		echo "Failed";
	}
}
if(isset($_REQUEST['b2'])){
	$flat=$_REQUEST['t1'];
	$no=$_REQUEST['t2'];
	$r=mysqli_query($con,"INSERT INTO `tempo`(`no_o_e`, `flatno`) VALUES (".$no.",'".$flat."')");
	if($r){
		echo "Success";
	}else{
		echo "Failed";
	}
}
?>
<b>Colony Details<br></b>
<?php
$r=mysqli_query($con,"SELECT * FROM `colony`");
if(mysqli_num_rows($r)>0){
?>
<table border="1">
	<thead>
		<tr>
			<th>Flat No.</th>
			<th>Name</th>
			<th>Special Id</th>
		</tr>
	</thead>
	<tbody>
<?php
while($row=mysqli_fetch_array($r)){
	?>
		<tr>
			<th><?php echo $row[0] ?></th>
			<th><?php echo $row[1] ?></th>
			<th><?php echo $row[2] ?></th>
		</tr>
	<?php
}
?>
	</tbody>
</table>
<?php
}else{
	echo "No Data<br>";
}
?><br><br>
<b>New Entry Allowance Details<br></b>
<?php
$r2=mysqli_query($con,"SELECT * FROM `tempo`");
if(mysqli_num_rows($r2)>0){
?>
<table border="1">
	<thead>
		<tr>
			<th>Flat No.</th>
			<th>Number of Entry Granted</th>
		</tr>
	</thead>
	<tbody>
<?php
while($row2=mysqli_fetch_array($r2)){
	?>
		<tr>
			<th><?php echo $row2[1] ?></th>
			<th><?php echo $row2[0] ?></th>
		</tr>
	<?php
}
?>
	</tbody>
</table>
<?php
}else{
	echo "No Data<br>";
}
?><br><br>
<b>Flat No Details<br></b>
<?php
$r3=mysqli_query($con,"SELECT * FROM `flat`");
if(mysqli_num_rows($r3)>0){
?>
<table border="1">
	<thead>
		<tr>
			<th>Flat No.</th>
		</tr>
	</thead>
	<tbody>
<?php
while($row2=mysqli_fetch_array($r3)){
	?>
		<tr>
			<th><?php echo $row2[0] ?></th>
		</tr>
	<?php
}
?>
	</tbody>
</table>
<?php
}else{
	echo "No Data";
}
?>
<br><br>
<form method="post" action="">
New Flat No.<input type="text" name="t1">
<input type="submit" name="b1">
</form>
<br><br>
New Entry
<form method="post" action="">
	Allow new Entry:
	<?php
	$a=mysqli_query($con,"SELECT * FROM `flat`");
	?><select name="t1">
		<?php
	while($ro=mysqli_fetch_array($a)){
		?>
		<option value="<?php echo $ro[0] ?>"><?php echo $ro[0] ?></option>
	<?php
	}
	?>
	</select>  No of Entry<input type="number" name="t2">
<input type="submit" name="b2">
</form>
