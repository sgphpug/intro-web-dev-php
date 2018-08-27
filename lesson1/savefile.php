<?php
$uploadfile = dirname(__FILE__) . DIRECTORY_SEPARATOR .  $_FILES['newfile']['name'];
move_uploaded_file($_FILES['newfile']['tmp_name'], $uploadfile);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Save File</title>
</head>

<body>

<h1>Image Uploaded</h1>
<p><img src="<?php echo $_FILES['newfile']['name']; ?>" /></p>

</body>
</html>


