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

            </ul>
        </div>
        <div class="tel">
            <ul align="right">

            </ul>
        </div>
    </header>

    <main id="main" class="demo">
        <section >
            <h1 align="center">Набор задачек</h1>
            <h1 align="center">Условия задачек тут</h1>
        </section>
        <section width="50%" maxwidth="50%" align="center">
            <h5 align="center" onclick="www.itmathrepetitor.ru/programmirovanie-zadachi-alg/">http://www.itmathrepetitor.ru/programmirovanie-zadachi-alg/</h5>
        </section>
        <table align="center">
            <tr>
                <td>
                    Задача
                </td>
            </tr>
            <tr>
                <td>
                    <a href="backend/task1/task1.php">
                    Задача 1 - Угадай число
                    </a>
                </td>
            </tr>
        </table>
    </main>



    <script src="public/js/checkPassRegistr.js"></script>
<script src = "https://smartcaptcha.yandexcloud.net/captcha.js?render=onload&onload=onSmartCaptchaReady"
    defer></script>
</body>
</html>
