<?php
session_start();
?>
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
    <link href="public/css/body.css" rel="stylesheet" type="text/css">

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
                <li><a href="backend/php/userPage.php" >Мой профиль</a></li>
                <li><a href="backend/php/allUsersPage.php" >Все пользователи</a></li>
            </ul>
        </div>
        <div class="tel">
            <ul align="right">
                <?php
                if(isset($_SESSION['logged-in'])){
                    if($_SESSION['logged-in']){
                        echo '<li><a href="../../backend/php/scripts/logout.php" >Выход</a></li>';


                    }
                    else {
                        echo '<li><a href="../../backend/php/loginPage.php" >Авторизация</a></li>';
                        echo '<li><a href="../../backend/php/registrationPage.php">Регистрация</a></li>';
                    }
                }
                else{
                    echo '<li><a href="../../backend/php/loginPage.php" >Авторизация</a></li>';
                    echo '<li><a href="../../backend/php/registrationPage.php">Регистрация</a></li>';


                }
                ?>
            </ul>
        </div>
    </header>

    <main id="main" class="demo">
        <section >
            <h1 align="center">Новая соцсеть</h1>
            <h1 align="center">ТЕСТ</h1>
        </section>
        <section width="50%" maxwidth="50%" align="center">

                <?php


                require_once "./public/connect.php";
                ?>


        </section>
    </main>



    <script src="public/js/checkPassRegistr.js"></script>
<script src = "https://smartcaptcha.yandexcloud.net/captcha.js?render=onload&onload=onSmartCaptchaReady"
    defer></script>
</body>
</html>
