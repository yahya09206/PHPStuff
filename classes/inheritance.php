<?php 
//class syntax
class Car{
	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $door = 4;

	function moveWheels(){
		//use keyword this to reference 
		$this->wheels = 10;
	}

	function doors(){
		//use keyword this to reference 
		$this->doors = 6;
	}
}

//new instance of car
$audi = new Car();
$jet = new Plane();
$jet->moveWheels();
echo $jet->wheels;


//class that inherits everything from car class
class Plane extends Car{


}

if(class_exists("Plane")){
	echo "It exist ";
}

?>
