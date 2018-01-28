<?php 
if (isset($_POST['submit'])) {
	# code...
$name = array("Me","Student", "Peter", "Maria", "Jane", "Tom");
$minimum = 5;
$max = 10;
$username = $_POST['username'];
$password = $_POST['password'];

//check if username is a certain length
if (strlen($username) < $minimum) {
	# code...
	echo "Username has to be longer than five characters";
}
if (strlen($username) > $max) {
	# code...
	echo "Username can't be longer than 10 characters";
}
//check to see if username is inside of name array
if (!in_array($username, $name)) {
	# code...
	echo "Sorry you are not allowed to login";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="form_process.php" method="post">
		<input type="text" name="username" placeholder="enter name">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="submit">
	</form>
</body>
</html>