<?php 
const BASEDIR = 'C:\xampp\htdocs\php-45day-45project\todolist';
const URL = 'http://localhost/php-45day-45project/todolist/';
const DEV_MODE = true;
try {
    $db = new PDO('mysql:host=localhost;dbname=todolist;','root','');
}catch (PDOException $e){
    echo $e->getMessage();
}
?>
