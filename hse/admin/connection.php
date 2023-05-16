<?php
$user = "hseadmin";
$pass = "Spacex93!";
$db = "hse_board";
$host = "localhost";



$connection = mysqli_connect($host, $user, $pass) or die("# 1)___ошибка подключения к БД!");
  $db = mysqli_select_db($connection, $db) or die("# 2)___не правильно указано название БД!");
    
?>