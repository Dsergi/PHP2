<?php

require 'AbstractBikes.php';

$bikes = new Piece (1001, "piece", "Kona", 150000, 1);

$softwares = new Softwares (2001, "softwares", "Инструкция", $bikes->$sellPrice / 2, 1);
    

$bolts = new Weight (3001, "weight", "bolt", 100, 1);   

$bikes->getInfo();

$softwares->getInfo();

$bolts->getInfo();
