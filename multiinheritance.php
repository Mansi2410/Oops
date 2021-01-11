<?php  
echo("Multiple Inheritance is the property of the Object Oriented Programming.
In which child class or sub class can acquire the properties of the various parent classes or super classes.")."</br>";
    class Car  
    {  
        public function Engine()  
        {  
            echo "It has Powerful engine";  
        } 
        
        public function Battery()  
        {  
            echo " Without a battery, your car won’t run.";  
        }
        public function Radiator()  
        {  
            echo "The radiator is responsible for helping the engine";  
        }
        public function Brakes()  
        {  
            echo "Disc brakes can be found on the front and back wheels";  
        }
    }  

    interface Properties { 
        public function FrontAxle(); 
     } 
     

 
class SUV extends Car implements Properties
    {  
        public function Engine()  
        {  
            echo "1000hp Engine"; 
        } 
        public function Seater()   
        {  
            echo "It is four Seater"; 
        }
        public function FrontAxle()  
        {
            echo "the front axle is where the front wheel hubs are attached";  
        }
    }  
    $newCar = new SUV(); 
    $newCar->Battery();  
    $newCar->Engine() ; 
    $newCar->Radiator();  
    $newCar->Seater() ;
    $newCar->FrontAxle();
?>