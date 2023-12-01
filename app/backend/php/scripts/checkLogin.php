<?php

session_start();


$host = 'db';
$user = 'root';
$pass = 'example';
$db = "mydb1";

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";


$queryFunc = file_get_contents("./sql/checkLogin.sql");
$query = $pdo->prepare($queryFunc);
$query->execute([
    'login' => $login,
]);

$userData = $query->fetchAll();
//echo "<pre>";
//print_r($userData);
//echo "</pre>";
if ((($userData[0]['Email'] ==$login) OR ($userData[0]['Phone'] ==$login))AND($userData[0]["Password"]==$password)){
    $_SESSION['message']='Вы успешно авторизованы';
} else {
    $_SESSION['message']='Ошибка: Проверьте логин и пароль';

}
header("Location: ../loginPage.php");


//    $_SESSION["message"]="Поздравляем с регистрацией. Войдите в аккаунт";
//    header('Location: ../registrationPage.php');
