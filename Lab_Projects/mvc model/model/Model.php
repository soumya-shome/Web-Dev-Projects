<?php
class Model
{
public function login()
{
$r='';
if(isset($_REQUEST['uid']) && isset($_REQUEST['pas']))
{
if($_REQUEST['uid']=='hello' && $_REQUEST['pas']=='world') $r= 'Correct';
else
$r= 'Incorrect Userid or Password';
}
return $r;
}
}
?>