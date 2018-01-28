<?php 
if (isset($_POST['submit'])) {
	# code...
$username = $_POST['username'];
$password = $_POST['password'];
}


//'name' field in form is what is used to extract data
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="submission.php" method="post">
		<input type="text" name="username" placeholder="enter name">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="submit">
	</form>
</body>
</html>