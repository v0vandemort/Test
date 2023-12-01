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
        <link href="../../public/css/header.css" rel="stylesheet" type="text/css">
        <link href="../../public/css/form.css" rel="stylesheet" type="text/css">
        <link href="../../public/css/body.css" rel="stylesheet" type="text/css">

    </head>
<body>
<header>
    <DIV class="logo">
        <a href="../../index.php ">
            <img src="../../public/logo.png.webp" width="60" height="60px" />
        </a>
    </DIV>
    <div class="menu">
        <ul>
            <li><a href="../../backend/php/userPage.php" >Мой профиль</a></li>
            <li><a href="../../backend/php/allUsersPage.php" >Все пользователи</a></li>
        </ul>
    </div>
    <div class="tel">
        <ul align="right">
            <li><a href="../../backend/php/loginPage.php" >Авторизация</a></li>
            <li><a href="../../backend/php/registrationPage.php">Регистрация</a></li>
        </ul>
    </div>
</header>

<section >
    <h1 align="center">
        <?php
        echo("Авторизация");
        ?>
    </h1>
</section>

<section width="50%" maxwidth="50%" align="center">
    <div class="form" align="center">
        <form action="./scripts/checkLogin.php" class="login" align="center" metod="post">
            <label>Login: почта или телефон</label>
            <input name="login" required>
            <label>Password</label>
            <input name="password" type="password" required>
            <label>
                <?php
                if (isset($_SESSION['message'])){
                    echo ($_SESSION['message']);
                }
                ?>
            </label>
            <button type="submit" onclick="">Войти</button>
        </form>
    </div>
</section>



<script src="public/js/menu.js"></script>
<script src="public/js/checkPassRegistr.js"></script>
<script src = "https://smartcaptcha.yandexcloud.net/captcha.js?render=onload&onload=onSmartCaptchaReady"
        defer></script>
</body>
</html>