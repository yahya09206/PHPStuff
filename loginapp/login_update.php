<!-- include files -->
<?php include "db.php"; ?>
<?php include "functions.php";?>

<?php 
	if (isset($_POST['submit'])) {
		# code...
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];

		//query to update
		$query = "UPDATE users SET ";
		$query .= "username = '$username', ";
		$query .= "password = '$password'";
		$query .= "WHERE id = $id";

		$result = mysqli_query($connection, $query);
		//check if result
		if (!$result) {
			# code...
			die("QUERY FAILED" . mysqli_error($connection));
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
		<form action="" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control">
					
				</input>
				<label for="password">Password</label>
				<input type="password" 	name="password" class="form-control">
				<div class="form-group">
					<select name="id" id="">
						<!-- while loop to update data -->
						<?php 
							showAllData();
						?>
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