<?php

echo "Dependency Injection helps us to avoid dependencies and can be changed at run time as well as compile time.
---> The Dependency Injection makes totally independent classes
---> It composes testable code without any problem
---> Since each class becomes independent, it becomes easier to manage it"."</br>";

   class Car {
      private $type;
      public function __construct($type){

         $this->type = $type;

      }
      public function totaltype(){

         return count($this->type);

      }
   }

   $Totaltypes = array("SEDAN", "SPORTS CAR", "SUV");
    $p = new Car($Totaltypes);
   echo $p->totaltype();

?>