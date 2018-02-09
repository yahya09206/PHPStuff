<?php 

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
		<?php 
			while ($row = mysqli_fetch_assoc($result)) {
		?>

			<pre>
				<?php
				print_r($row);
				?>
			</pre>
		<?php
			}
		?>
	
	</div>
</div>
</body>
</html>