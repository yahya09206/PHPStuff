<?php 

//CREATE
if (isset($_POST['submit'])) {
	# code...
	$username = $_POST['username'];
	$password = $_POST['password'];

//connect to database
$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp', 8889);
	if($connection){
		echo "we are connected";
	}else{
		//error code
		die('Database connection failed');
	}

	//insert data to mysql
	$query = "INSERT INTO users(username, password)";
	//concatenate with above query
	$query .= "VALUE ('$username', '$password')";
	//prebuilt function for connecting with db that accepts two parameters
	$result = mysqli_query($connection, $query);

	if(!result){
		die('Query FAILED' . mysqli_error());
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>MySQL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="col-sm-6">
		<form action="login_create.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control">
					
				</input>
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control">
					
				</input>
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Submit">
		</form>
	</div>
</div>
</body>
</html>