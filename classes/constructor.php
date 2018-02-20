<?php 
//class syntax
class Car{
	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $door = 4;

	function __construct(){
		//use keyword this to reference 
		echo $this->wheels = 10;
	}

}

//new instance of car
$audi = new Car();
$truck = new Car();
$semi = new Car();



?>
