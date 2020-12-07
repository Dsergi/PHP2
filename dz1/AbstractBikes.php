<?php

require 'Piece.php';
require 'Softwares.php';
require 'Weight.php';

abstract class AbstractBikes
{
    
    protected $price;
    protected $name;
        
    protected function __construct( $name, $price)
    {
        $this->price = $price;
        $this->name = $name;
                                
    }  
      
    abstract protected function getTotalPrice();    
    
}
