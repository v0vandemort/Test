<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test - новая соцсеть</title>
    <link href="public/css/header.css" rel="stylesheet" type="text/css">
    <link href="public/css/form.css" rel="stylesheet" type="text/css">
    <?php
    require_once "./public/connect.php";
    ?>
</head>
<body>
<header>
    <DIV class="logo">
        <a href="index.php ">
            <img src="public/logo.png.webp" width="60" height="60px" />
        </a>
    </DIV>
    <div class="menu">
        <ul>
            <li><a href="#" onclick= "load('userPage')">Мой профиль</a></li>
            <li><a href="#" onclick= "load('allUsersPage')">Все пользователи</a></li>
        </ul>
    </div>
    <div class="tel">
        <ul align="right">
            <li><a href="#" onclick= "load('loginPage')">Авторизация</a></li>
            <li><a href="#" onclick= "load('registrationPage')">Регистрация</a></li>
        </ul>
    </div>
</header>

<div id="main" class="demo">
    <h1 align="center">Новая соцсеть</h1>
    <h1 align="center">ТЕСТ</h1>
    <button onclick="loadBase()" class="start">Начать работу</button>

</div>



<script src="public/js/menu.js"></script>

</body>
</html>