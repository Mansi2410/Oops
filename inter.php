<?php

abstract class Car {
   
    abstract function prop();

    public function speed() {
        echo 'It runs very fast!';
    }
}

class SUV extends Car {
    public function prop() {
        echo 'Four-wheel drive that can be taken off-road and have the feel of a lighter truck';
    }
}

class SportCar extends Car {
    public function prop() {
        echo 'Racing Car';
    }
}

$SUV = new SUV();
$Sportscar = new Sportscar();

$SUV->prop(); 
$Sportscar->prop(); 

$SUV->Car(); 
$Sportscar->Car(); 
?>
<?php

abstract class animal {

abstract protected function showHomeWork($work);

}
class ann extends animal {

public function showHomeWork( $work = 'meat' ) {

 $work = 'I am eating on '.$work;

 return $work;

}

public function startWork($work) {

 return $this->showHomeWork($work);
         
}
     
}
?>
