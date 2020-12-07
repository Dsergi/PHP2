<?php
include "config.php";

  /* Принимаем данные из формы */
  $name = $_POST["name"];  
  $text = $_POST["text"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text = htmlspecialchars($text);// Преобразуем спецсимволы в HTML-сущности
  
  $sql = "INSERT INTO `comments` (`name`, `text`) VALUES ('$name', '$text')";// Добавляем комментарий в таблицу
  $res = mysqli_query($connect,$sql);
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
   
  
?>  


