<?php 
//class syntax
class Car{
	function moveWheels(){
		echo "car is moving";
	}
}
if (method_exists("Car", "moveWheels")) {
	echo "The method exists";
}else{
	echo "Sorry";
}
?>
