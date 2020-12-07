<?php

/* DB config */
const HOST = "localhost";
const USER = "mysql";
const PASS= "mysql";
const DB = "shop";

$connect = mysqli_connect(HOST, USER, PASS, DB) 
or die ("Ошибка");

