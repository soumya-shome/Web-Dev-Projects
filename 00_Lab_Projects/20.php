<?php
$a[] = "Amit";
$a[] = "Bikash";
$a[] = "Chameli";
$a[] = "Divya";
$a[] = "Ena";
$a[] = "Farhan";
$a[] = "Goutam";
$a[] = "Hena";
$a[] = "Indra";
$a[] = "Joyita";
$a[] = "Koushani";
$a[] = "Lili";
$a[] = "Nabin";
$a[] = "Oindrila";
$a[] = "Piyali";
$a[] = "Arohi";
$a[] = "Riya";
$a[] = "Biplab";
$a[] = "Dhiman";
$a[] = "Emon";
$a[] = "Arun";
$a[] = "Sunayna";
$a[] = "Titli";
$a[] = "Madhumita";
$a[] = "Dipta";
$a[] = "Liza";
$a[] = "Soumi";
$a[] = "Soumen";
$a[] = "Rohan";
$a[] = "Vicky";
// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";
// lookup all hints from array if $q is different from ""
if ($q !== "") {
$q = strtolower($q);
$len=strlen($q);
foreach($a as $name) {
if (stristr($q, substr($name, 0, $len))) {
if ($hint === "") {
$hint = $name;
} else {
	$hint .= ", $name";
}
}
}
}
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "No suggestion available" : $hint;
?>