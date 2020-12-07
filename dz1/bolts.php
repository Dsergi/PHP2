<?php

class Weight extends AbstractBikes 
{
    protected $sellPrice;
    protected $kg;    

    function __construct($artNum, $cat, $name, $sellPrice, $kg)
    {
        parent::__construct($artNum, $cat, $name, $sellPrice, $kg);
        
        $this->kg = $kg;
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

    function getTotalPrice()
    {
        return $this->sellPrice * $this->kg;
    }
    
    function getInfo()
    {
        echo "арт. {$this->artNumber} "
        . "кат. {$this->category} "
        . "наим. {$this->name} "        
        . "{$this->kg} кг. "
        . "Цена продажи {$this->sellPrice} руб. " 
        . "ИТОГО {$this->getTotalPrice()} руб. " . '<br>';
        
                
    }

}
