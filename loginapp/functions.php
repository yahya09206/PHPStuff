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