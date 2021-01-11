<?php
namespace basic; 
function Hello()  
    { 
        echo 'This is a namespace </br>'; 
    } 
    
hello(); 
 
 

trait msg {
  public function msg() {       
    
    echo " This is a Trait "; 
}

}

class Traits {
  use msg;              
}


$obj = new Traits();    

$obj->msg();




?>