<?php include "db.php";

//UPDATE
	//select everything from users
	$query = "SELECT * FROM users";
	//prebuilt function for connecting with db that accepts two parameters
	$result = mysqli_query($connection, $query);
	if(!result){
		die('Query FAILED' . mysqli_error());
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
				<div class="form-group">
					<select name="" id="">
						<option value="">1</option>
					</select>
				</div>
					
				</input>
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
		</form>
	</div>
</div>
</body>
</html>