<?php
#$con=mysqli_connect('localhost','root','');
#if(!$con){
#	die("Could not connect:".mysql_error());
#}
#mysqli_select_db("project",$con);

$link = mysql_connect('localhost', 'root','');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

$db_selected = mysql_select_db('project', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>