<?php

require 'AbstractGoods.php';

$sellPrice = 150000;

$goods = [
    new Piece ("piece", $sellPrice, 1),
    new Softwares ("softwares", $sellPrice),
    new Weight ("weight", 100, 2.5),
];

foreach ($goods as $good){
    $good->getInfo();
}

