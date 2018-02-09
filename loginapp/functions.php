<?php include "db.php" ?>
<?php 

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

?>