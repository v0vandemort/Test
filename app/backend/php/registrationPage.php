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
<>
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
        echo("Регистрация");
        ?>
    </h1>
</section>
<section width="50%" maxwidth="50%" align="center">
    <div class="form" align="center">
        <form  class="login" align="center" id="regForm" method="POST" action="./scripts/addUser.php" >
            <label>Email</label>
            <input name="email" required>

            <label>Phone</label>
            <span style="font-size: 0.8em; color: #888;">Введите номер без 8 или +7</span>
            <input name="phone" type="text" pattern="[0-9]{10}" ="Введите 10 цифр, без +7 и 8" required>


            <label>First Name</label>
            <input name="firstName" required>

            <label>Last name</label>
            <input name="lastName" required>

            <label>BirthDay</label>
            <input name="birthday" type="date" required>

            <label>Password</label>
            <input name="password" type="password" id="passwordConfirm" required>
            <label>Repeat password</label>
            <input name="passwordConfirm" type="password" id="passwordConfirmRepeat" required>

            <span id="messageReg" style="font-size: 0.8em; color: #888;">
                <?php
                    if (isset($_SESSION['message'])){
                        echo ($_SESSION['message']);
                    }
                ?>
            </span>


            <label >
                <?php
                if (isset($_SESSION['message'])){
                    echo ($_SESSION['message']);
                }
                ?>
            </label>
            <div
                    id="captcha-container"
                    class="smart-captcha"
                    data-sitekey="ysc1_BfIZiCNyd0IxmNXXd25J5TUecCai2nLiPeDSu3Eh817e370c"
                    data-hl="ru"
                    data-callback="callback"
            ></div>
            <button type="submit" >Зарегистрироваться</button>
        </form>
    </div>
</section>



    <script src="public/js/menu.js"></script>
    <script src="../../public/js/checkPassRegistr.js"></script>
    <script src="https://smartcaptcha.yandexcloud.net/captcha.js" defer></script>
    <script src="../../public/js/captcha.js"></script>
</body>
</html>