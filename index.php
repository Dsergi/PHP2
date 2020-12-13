<?php

require 'vendor/autoload.php';
require 'DB.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$loadSize = 3;

if (isset($_GET['from'])) {
    $content = DB::getInstance()->getTableDataPart(DB::TABLE_GOODS, $_GET['from'] , $loadSize);
         
    echo $twig->render('content.twig', [
        'item' => $content,        
    ]);
    exit;
}

$action = $_GET['action'];
$id = $_GET['id'];

if($action == "open"){    
    $content = DB::getInstance()->getById(DB::TABLE_GOODS, $id);
    echo $twig->render('view.twig',[
        'item'=>$content,
    ]);
    exit;
}

echo $twig->render('index.twig', [
    'loadSize' => $loadSize,
    
]);
