<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Control Structures</title>
</head>

<body>

<?php
$a = 5;
if ($a == 5){
	echo "There are $a oranges.";
} else {
	echo "There are less than 5 oranges.";
}

for ($i=1;$i<=5;$i++)
{
	echo "There should be $i apples.<br/>";
}

$arr = array(1,2,3,5,7,11);
foreach($arr as $p)
{
	echo $p . " is a prime number.<br/>";
}
?>

</body>
</html>
