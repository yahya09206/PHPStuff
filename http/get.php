<?php 
	//super global variable available anywhere
	print_r($_GET);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

<?php 
	$id = 10;
	
?>
	<a href="get.php?id=<?php echo $id ?>">Click Here</a>
</body>
</html>