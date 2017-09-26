<?php

namespace Mibici;

class Pasajero implements pasajeroInterface {
    
    public $moviId;
    public $quantityOfBikes;
    
    public function __construct(Movi $movi) {
        $this->moviId=$movi->id;
             
    } 
   
       
}
