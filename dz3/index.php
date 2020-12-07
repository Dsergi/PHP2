<?php

require 'vendor/autoload.php';
require 'config.php';
require 'connectDb.php';

$db = new connectDb(HOST, USER, PASS, DB);
$qr = $db->query("SELECT * from shop");
//print_r($qr);
/*foreach ($qr as $img){   
    echo $img->id
    . $img->address_small . "<br />";  
}
*/
$loader = new Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.twig',[
    'qr'=>$qr,
]);
