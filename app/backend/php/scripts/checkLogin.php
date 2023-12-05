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



$queryFunc = file_get_contents("./sql/checkLogin.sql");
$query = $pdo->prepare($queryFunc);
$query->execute([
    'login' => $login,
]);

$userData = $query->fetchAll();
//echo"<pre>";
//print_r($userData);
//echo"</pre>";

if (!empty($userData) and(($userData[0]['Email'] == $login) or ($userData[0]['Phone'] == $login)) and ($userData[0]["Password"] == $password)) {
    $_SESSION['message'] = 'Вы успешно авторизованы';
    $_SESSION['user-id'] = $userData[0]['UserId'];
    $_SESSION['logged-in'] = true;

    $queryFunc = file_get_contents("./sql/getPerson.sql");
    $query = $pdo->prepare($queryFunc);
    $query->execute([
        'UserId' => $userData[0]['UserId'],
    ]);

    $_SESSION['userData'] = $query->fetchAll();


    header("Location: ../userPage.php");
} else {
    $_SESSION['message'] = 'Ошибка: Проверьте логин и пароль';

    header("Location: ../loginPage.php");
}


