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
    <div class="gallery"><img src="<?=$id['address_big']?>"/>      
    <p>Просмотров:<?=$id['count']?></p>
    <a href="index.php">Назад</a>
    </div>
    <?php }
   
     
}
?>