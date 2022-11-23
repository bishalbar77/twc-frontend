<?php
//variable setting
$name = $_REQUEST['name'];
$name2 = $_REQUEST['name2'];


$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];


mail("togetherwecanofficial@gmail.com", "You got a mail" , "From:  $name $name2
	$sub
	$phone
	
	$email
	$message
 <$email>")


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Thank You</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="yo">
<h2 align = "center">Thanks for your support</h2>
<h3 align="center">You will receive a confirmation mail soon.</h3>
</div>
</body>
</html>