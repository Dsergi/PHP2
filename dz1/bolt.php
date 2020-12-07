<?php

class Bolts extends Bikes 
{
    protected $gramm;

    function __construct($artNum, $cat, $name, $price, $sellPrice, $gramm)
    {
        parent::__construct($artNum, $cat, $name, $price, $sellPrice, $gramm);
        $this->gramm = $gramm;
    }
    function getTotalPrice()
    {
        return $this->sellPrice * $this->gramm;
    }

    function getProfit()
    {
        return $this->getTotalPrice() - $this->getPrice() * $this->gramm;
    }
    function getInfo()
    {
        echo "арт. {$this->artNumber} "
        . "кат. {$this->category} "
        . "наим. {$this->name} "
        . "Цена закупки {$this->price} руб. "
        . "{$this->quantity} грамм. "
        . "Цена продажи {$this->sellPrice} руб. " 
        . "ИТОГО {$this->getTotalPrice()} руб. "
        . "ВЫРУЧКА {$this->getProfit()} руб. " . '<br>';
                
    }

}