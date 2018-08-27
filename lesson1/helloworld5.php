<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Hello, World!</title>
</head>

<body>

<h1>Hello, <?php echo $_POST['name'] ?>!</h1>

<form method="post">
    Name: <input type="text" name="name" />
    <input type="submit" value="Send" />
</form>

</body>
</html>
