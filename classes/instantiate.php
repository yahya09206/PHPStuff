<?php 
//class syntax
class Car{
	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $door = 4;
	function moveWheels(){
		echo "car is moving ";
	}
}

//new instance of car
$audi = new Car();
$benz = new Car();

//use method on car
$audi->moveWheels();
$benz->moveWheels();

?>
