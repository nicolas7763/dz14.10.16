<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Car {
    public $maxSpeed;
    public $color;
    public $numberOfDoors;
    public  $carsBrand;
            
   function __construct($carsBrand, $numberOfDoors, $color, $maxSpeed ) {
       $this->carsBrand = $carsBrand;
       $this->color = $color;
       $this->maxSpeed = $maxSpeed;
       $this->numberOfDoors = $numberOfDoors;
   }
       function getcarsBrand() {
           return   $this->carsBrand;
       }
       
       function getcolor() {
           return  $this->color; 
       }
       function getmaxSpeed() {
           return   $this->maxSpeed;
       }
       function getnumberOfDoors() {
           return $this->numberOfDoors;  
       }
}
$cars[] = new Car('BMW', '2 двери', 'красного цвета', '200км/ч');
$cars[] = new Car('LADA', '5 дверей', 'белого цвета', '140км/ч');
$cars[] = new Car('AUDI', '4 двери', 'серого цвета', '185км/ч');
foreach ($cars as $value) {
    echo  $value->getcarsBrand().' автомобиль '. $value->getcolor(). ' имеет '. 
$value->getnumberOfDoors() .' развивает скорость '.$value->getmaxSpeed(). "<br />";
}

//var_dump($cars);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ООП</title>
</head>
<body>
</body>
</html>
