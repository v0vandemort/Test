<?php
//ini_set('extension', 'pdo_mysql.so');


//$host = 'localhost';
//$port = '5432';
//$db = 'mydb1';
//$user = 'root';
//$pass = 'mypass';
//
//$dsn = "mysql:host=$host;port=$port;dbname=$db;user=$user;password=$pass";
//$opt = [
//    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//    PDO::ATTR_EMULATE_PREPARES => false,
//];
//
//try {
//    $pdo = new PDO($dsn);
//} catch (PDOException $e) {
//    echo $e->getMessage();
//}
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
