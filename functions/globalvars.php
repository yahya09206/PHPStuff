<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
<?php 
$x = "outside"; //global

function convert(){
	global $x;
	$x = "inside"; //local
}

echo $x;
echo "<br>";
convert();
echo $x;

//local scope and global scope
//global vars are available outside and inside a function
//local vars can't be used outside a function
//use keyword 'global' to make variable inside of function a global one
?>
</body>
</html>