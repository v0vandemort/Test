<?php

session_start();
echo "<pre>";
print_r($_POST);
echo "</pre>";

$host = 'db';
$user = 'root';
$pass = 'example';
$db="mydb1";

$pdo=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$birthDay = $_POST['birthday'] ?? '';
$birthDay = date("Y.m.d", strtotime($birthDay));;
$password = $_POST['password'] ?? '';
$passwordConfirm = $_POST['passwordConfirm'] ?? '';





    $queryFunc = file_get_contents("./sql/addPeople.sql");
    $query = $pdo->prepare($queryFunc);
    $query->execute([
        'firstName' => $firstName,
        'lastName' => $lastName,
        'birthDay' => $birthDay,
    ]);

    $userId = $pdo->lastInsertId();

    $queryFunc = file_get_contents("./sql/addUser.sql");
    $query = $pdo->prepare($queryFunc);
    $query->execute([
        'email' => $email,
        'phone' => $phone,
        'password' => $password,
        'userId' => $userId

    ]);
    $_SESSION["message"]="Поздравляем с регистрацией";
