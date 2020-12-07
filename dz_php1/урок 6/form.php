<?php
include "config.php";

$sql= "SELECT * FROM comments"; 
  $res = mysqli_query($connect,$sql);
  while ($id = mysqli_fetch_assoc ($res)) {?>
    <div class="userComments">
    <h3><?=$id['name']?></h3>       
    <p class="text"><?=$id['text']?></p>          
    </div>
    <?php
  }?>
<br>
<div class="comments">
    <form name="comment" action="comments.php" method="post">
  <p>
    <label>Имя:</label>
    <input type="text" name="name" />
  </p>
  <p>
    <label>Комментарий:</label>
    <br />
    <textarea name="text" cols="30" rows="30" ></textarea>
  </p>
  <p>          
    <input type="submit" value="Отправить" />
  </p>
</form>
    </div>