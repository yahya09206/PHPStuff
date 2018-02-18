<?php 
	//set cookies takes 3 params
	$name = 'John';
	$value = 100;
	//user time function to set expiration date
	$expire = time() + (60*60*24*7);
	setcookie($name, $value, $expire);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 


		if (isset($_COOKIE["John"])) {
			# code...
			//grab value from cookie
			$someOne = $_COOKIE["John"];

		}else{
			$someOne = "";
		}
	?>

</body>
</html>