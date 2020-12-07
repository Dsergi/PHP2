<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>  
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header><h1>ВелоShop</h1></header>
<main> 
<?php

include "config.php";

$action = $_GET['action'];
$id = $_GET['id'];

if($action == "open"){
        
    $sql = "UPDATE shop SET count = count + 1 where id=$id";  
    $res = mysqli_query($connect,$sql);  


    $sql = "SELECT * from shop where id=$id";
    $res = mysqli_query($connect,$sql);
   
    while($id = mysqli_fetch_assoc ($res)){?>
    <h3><?=$id['name']?></h3>
    
    <div class="galleryBig"><img src="<?=$id['address_big']?>"/></div>
    <p class="about"><?=$id['about']?></p>          
    <p>Просмотров:<?=$id['count']?></p>
    <a href="index.php">Назад</a>
    </div>
       
    <?php }

}?>


</main>
<footer><h6>Спасибо</h6></footer>
</body>
</html>