<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Functions</title>
</head>

<body>

<?php
function hello(){
	echo "Hello, world!";
}
hello();

function sayHi(){
	return "Hi";
}
echo sayHi();

function hello_there($name){
	return "Hello there, $name";
}
echo hello_there('Michael');

function hello_again($name, $salutation='Evening'){
	return "Good $salutation, $name";
}
echo hello_again('Michael');
echo hello_again('Michael', 'Morning');

function duh(){
	$hidden_var = "Super duper deep dark secret";
	return true;
}
duh();
echo "The hidden variable is " . $hidden_var;


$public_var = "She's a guy!";
function doh(){
	global $public_var;
	return "The secret is " . $public_var;
}
echo doh();



?>

</body>
</html>
