<?php

echo "When many methods are called in a single instruction, then it is called Method Chaining.".<br>.

class Car
{
private $type;
private $engine;
private $fruit;


public function setType($type)
{
$this->type=$type;
return $this;
}
public function setEngine($engine)
{
$this->engine=$engine;
return $this;
}
public function setSeat($seat)
{
$this->seat=$seat;
return $this;
}

public function getInfo()
{
echo " Car is ".$this->type." and has ".$this->engine." having".$this->seat." at my home " ; 

}
}
$car = new Car();



$car->settype("SUV")->setEngine("10000pw")->setSeat("four")->getInfo();  
?>