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
$truck = new Car();
//use method on car
// $audi->moveWheels();

//change value of property
$audi->moveWheels();
//assign property
echo $audi->wheels . "<br>";

echo $truck->wheels = 10;
echo $truck->doors = 6;

?>
