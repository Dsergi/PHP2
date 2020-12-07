<?php
$imagesS = scandir("img/small");
$imagesB = scandir("img/big");
for($i=2;$i<count($imagesS);$i++):?>
   <div class="gallery"><a data-fancybox="gallery" href="img/big/<?= $imagesB[$i]?>"><img src="img/small/<?= $imagesS[$i]?>"></a></div>
<?php
endfor;
?>