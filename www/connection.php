<?php
$user = "root";
$pass = "Spacex93!";
$db = "kzmboz";
$host = "localhost";



$connection = mysqli_connect($host, $user, $pass) or die("# 1)___ошибка подключения к БД!");
  $db = mysqli_select_db($connection, $db) or die("# 2)___не правильно указано название БД!");
    
?>