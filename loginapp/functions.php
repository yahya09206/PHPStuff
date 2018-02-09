<?php include "db.php" ?>
<?php 

//function to show all data
function showAllData(){
//UPDATE
	//make connection global
	global $connection;
	//select everything from users
	$query = "SELECT * FROM users";
	//prebuilt function for connecting with db that accepts two parameters
	$result = mysqli_query($connection, $query);
	if(!result){
		die('Query FAILED' . mysqli_error());
	}

	//pull data from database from query up above using $result
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo "<option value='$id'>$id</option>";
	}
}

//function to update values
function updateTable(){
	# code...
	global $connection;
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

//function to delete rows
function deleteRows(){
	# code...
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	//query to update
	$query = "DELETE FROM users ";
	$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);
	//check if result
	if (!$result) {
		# code...
		die("QUERY FAILED" . mysqli_error($connection));
	}
}

?>