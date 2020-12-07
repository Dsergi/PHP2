<?php

class Piece extends AbstractGoods 
{
     
    protected $quantity;
    
    function __construct( $name, $price, $qty )
    {
        parent::__construct($name, $price);
        
        $this->quantity = $qty;
        $this->sellPrice = $price;
    }
                
    function getTotalPrice()
    {
        return $this->price * $this->quantity;
    }
    
    function getInfo()
    {
        echo "наим. {$this->name} "
        . "{$this->quantity} шт. "
        . "Цена продажи {$this->price} руб. " 
        . "ИТОГО {$this->getTotalPrice()} руб. ". '<br>';
                
    }

}
