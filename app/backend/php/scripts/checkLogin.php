<?php

session_start();

require_once ("../../../public/connect.php");


$login=$_POST['login'];
$password=$_POST['password'];

$queryFunc="'"+require_once "./sql/checkLogin.sql"+"'";
$query = $pdo->prepare($queryFunc);
$query->execute(['login' => $login]);
$Users = $query->fetchAll();


$UserName = "Нет логина";
$UserPassword = "Нет пароля";

if (isset($_POST["user-name"])) {
    $UserName = $_POST["user-name"];
};
if (isset($_POST["Password"])) {
    $UserPassword = $_POST["Password"];
};

if (($login === $UserName) & ($password === $UserPassword)) {
    setcookie('authCookie', 'logged', 0, '/');
    $_SESSION["message"] = 'Логин и пароль  верны';
    $_SESSION["name"] = 'Admin';
    header('Location: /Personal_account.php');
} else {
    $_SESSION["message"] = '<br>Логин и/или пароль не верны';
    header('Location: /index.php');
};