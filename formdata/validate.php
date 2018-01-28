<?php 
if (isset($_POST['submit'])) {
	# code...
$username = $_POST['username'];
$password = $_POST['password'];

if ($strlen($username)) {
	# code...
}
}


//'name' field in form is what is used to extract data
//save input values inside of variables so you can do more
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="extract.php" method="post">
		<input type="text" name="username" placeholder="enter name">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="submit">
	</form>
</body>
</html>