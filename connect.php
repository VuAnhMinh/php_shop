<?php  
$obj = new PDO("mysql:host=".HOST.";dbname=".DB, USER,PASS);
$obj -> query ("set names utf8");