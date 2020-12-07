<?php

class Piece extends AbstractBikes 
{
    protected $sellPrice; 
    protected $quantity;
    
    function __construct( $artNum, $cat, $name, $sellPrice, $qty ){
        parent::__construct($artNum, $cat, $name, $sellPrice, $qty);
        
        $this->quantity = $qty;
        $this->sellPrice = $sellPrice;
    }
    function getCategory()
    {
        return $this->category;
    }
    function getArtNum()
    {
        return $this->artNumber;

    }
    function getName()
    {
        return $this->name;

    }
    
    function getPrice()
    {
        return $this->sellPrice;

    }

    function getTotalPrice()
    {
        return $this->sellPrice * $this->quantity;
    }
    
    function getInfo()
    {
        echo "арт. {$this->artNumber} "
        . "кат. {$this->category} "
        . "наим. {$this->name} "
        . "{$this->quantity} шт. "
        . "Цена продажи {$this->sellPrice} руб. " 
        . "ИТОГО {$this->getTotalPrice()} руб. ". '<br>';
                
    }

}
