<?php 
//connect to database
$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp', 8889);
	if($connection){
		echo "we are connected";
	}else{
		//error code
		die('Database connection failed');
	}

?>