<?php 
if (isset($_POST['submit'])) {
	# code...
	echo "yes it works";
}


//POST is a global variable that picks up data from form
//Action sends data to another page or stores it in db
//isset checks to see if data is submitted
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="submission.php" method="post">
		<input type="text" name="" placeholder="enter name">
		<input type="password" name="" placeholder="password">
		<input type="submit" name="submit">
	</form>
</body>
</html>