<?php

namespace Mibici;

class Pasajero implements pasajeroInterface {
    
    public $moviId;
    public $quantityOfBikes;
    
    public function __construct() {
        $this->moviId=$this->obtenerMoviId;
          
          
    }
    
    
    public function obtenerMoviId(moviInterface $movi) {
        return $movi->id;
          
    }
    
    
    
}
