<?php

require 'vendor/autoload.php';
require 'config.php';
require 'connectDb.php';

$action = $_GET['action'];
$id = $_GET['id'];

if($action == "open"){    
    $db = new connectDb(HOST, USER, PASS, DB);
    $qr = $db->query("SELECT * from shop where id=$id");       
    /*foreach ($qr as $id){   
        echo $id->address_big . "<br />";      
    } */
}

$loader = new Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('view.twig',[
    'qr'=>$qr,
]);
