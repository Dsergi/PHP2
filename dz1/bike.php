<?php

class Bikes extends AbstractBikes 
{
    protected $artNumber;
    protected $name;
    protected $price;
    protected $sellPrice;    
    protected $quantity;

    function __construct( $artNum, $cat, $name, $price, $sellPrice, $qty)
    {
        $this->artNumber = $artNum;
        $this->category = $cat;
        $this->name = $name;
        $this->price = $price;
        $this->sellPrice = $sellPrice;        
        $this->quantity = $qty;
        
    }

    function getCategory()
    {
        return $this->category;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getTotalPrice()
    {
        return $this->sellPrice * $this->quantity;
    }

    function getProfit()
    {
        return $this->getTotalPrice() - $this->getPrice() * $this->quantity;
    }
    function getInfo()
    {
        echo "арт. {$this->artNumber} "
        . "кат. {$this->category} "
        . "наим. {$this->name} "
        . "Цена закупки {$this->price} руб. "
        . "{$this->quantity} шт. "
        . "Цена продажи {$this->sellPrice} руб. " 
        . "ИТОГО {$this->getTotalPrice()} руб. "
        . "ВЫРУЧКА {$this->getProfit()} руб. " . '<br>';
                
    }

}
