<?php
include "config.php";


$sql = "SELECT * from shop ORDER BY count ";
$res = mysqli_query($connect,$sql); 

$sql = "SELECT * FROM shop";
$res = mysqli_query($connect,$sql);

while($img = mysqli_fetch_assoc ($res)){?>
<div class="product">
   <div class="name"><a rel="gallery" class="photo" href="count.php?action=open&id=<?= $img['id']?>" >
   <h3><?=$img['name']?></h3></a></div>
   <div class="gallery"><a rel="gallery" class="photo" href="count.php?action=open&id=<?= $img['id']?>" >
   <img src="<?=$img['address_small']?>"/></a>
   <p class="about"><?=$img['aboutshort']?></p></div>
   <p>Просмотров:<?=$img['count']?></p>
   </div>
<?php }
?>
