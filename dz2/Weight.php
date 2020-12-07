<?php

class Weight extends AbstractGoods 
{
    protected $kg;    

    function __construct($name, $price, $kg)
    {
        parent::__construct($name, $price);
        
        $this->kg = $kg;
       
    }

    
    function getTotalPrice()
    {
        return $this->price * $this->kg;
    }
    
    function getInfo()
    {
        echo "наим. {$this->name} "        
        . "{$this->kg} кг. "
        . "Цена продажи {$this->price} руб. " 
        . "ИТОГО {$this->getTotalPrice()} руб. " . '<br>';
                        
    }

}
