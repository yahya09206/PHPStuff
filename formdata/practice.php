<?php 
if (isset($_POST['submit'])) {
	# code...
	$username = $_POST['name'];
	echo "your name is " . $username;
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Practice</title>
</head>
<body>
<form action="practice.php" method="post">
	<input type="text" name="name">
	<input type="submit" name="submit">
</form>
</body>
</html>