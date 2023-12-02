<?php
$host = 'db';
$user = 'root';
$pass = 'example';
$db="mydb1";


try{

    $pdo=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Подключение успешно";
} catch (PDOException $e){
    echo "Ошибка подключения: " . $e->getMessage();
    echo "Обновите страницу";
}
