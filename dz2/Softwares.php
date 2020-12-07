<?php

class Softwares extends AbstractGoods
{
    
    function __construct( $name, $price )
    {
        parent::__construct( $name, $price / 2 );        
    }
    
    function getTotalPrice()
    {
        return $this->price;
    }
    function getInfo()
    {
        echo "наим. {$this->name} "        
        . "Цена продажи {$this->price} руб. " 
        . "ИТОГО {$this->getTotalPrice()} руб. " . '<br>';

    }
    
}
