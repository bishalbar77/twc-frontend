<?php
//variable setting
$name = $_REQUEST['a'];
$na = $_REQUEST['b'];
$bm = $_REQUEST['c'];
$mn = $_REQUEST['d'];

mail("bishalranabr7@gmail.com", "website mail", $mn , "From: $name $na <$bm>")


?>