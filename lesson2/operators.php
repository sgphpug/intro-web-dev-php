<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Operators</title>
</head>

<body>

<?php
// Arithmetic Operators + - * /
echo 4 + 1;
echo 20 / 5;

// Assignment Operators =
$a = 5;
echo $a;

// Comparison Operators == != > <
var_dump($a == 5);

// Incrementing/Decrementing Operators ++ --
$a++;
echo $a;

// Logical Operators && || XOR
var_dump($a == 6 && is_numeric($a));

// String Operators . .=
$str = "Have a good " . date("l") . ".";
$str .= " That is today";
echo $str;

?>

</body>
</html>
