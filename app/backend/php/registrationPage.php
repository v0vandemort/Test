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
<!--        <script>-->
<!--            function onSmartCaptchaReady() {-->
<!--                if (!window.smartCaptcha) {-->
<!--                    throw new Error("SmartCaptcha is not present");-->
<!--                }-->
<!---->
<!--                const params = getParameters();-->
<!---->
<!--                const widgetId = window.smartCaptcha.render(-->
<!--                    "captcha-container",-->
<!--                    params-->
<!--                );-->
<!---->
<!--                window.smartCaptcha.subscribe(-->
<!--                    widgetId,-->
<!--                    "challenge-visible",-->
<!--                    handleChallengeVisible-->
<!--                );-->
<!---->
<!--                window.smartCaptcha.subscribe(-->
<!--                    widgetId,-->
<!--                    "challenge-hidden",-->
<!--                    handleChallengeHidden-->
<!--                );-->
<!---->
<!--                window.smartCaptcha.subscribe(widgetId, "success", handleSuccess);-->
<!---->
<!--                if (params.invisible) {-->
<!--                    window.smartCaptcha.execute(widgetId);-->
<!--                }-->
<!--            }-->
<!---->
<!--            function handleSuccess(token) {-->
<!--                if (window.NativeClient) {-->
<!--                    window.NativeClient.onGetToken(token);-->
<!--                } else {-->
<!--                    sendIos("captchaDidFinish", token);-->
<!--                }-->
<!--            }-->
<!---->
<!--            function handleChallengeVisible() {-->
<!--                if (window.NativeClient) {-->
<!--                    window.NativeClient.onChallengeVisible();-->
<!--                } else {-->
<!--                    sendIos("challengeDidAppear");-->
<!--                }-->
<!--            }-->
<!---->
<!--            function handleChallengeHidden() {-->
<!--                if (window.NativeClient) {-->
<!--                    window.NativeClient.onChallengeHidden();-->
<!--                } else {-->
<!--                    sendIos("challengeDidDisappear");-->
<!--                }-->
<!--            }-->
<!---->
<!--            function sendIos(...args) {-->
<!--                if (args.length == 0) {-->
<!--                    return;-->
<!--                }-->
<!---->
<!--                const message = {-->
<!--                    method: args[0],-->
<!--                    data: args[1] !== undefined ? args[1] : ""-->
<!--                };-->
<!---->
<!--                if (window.webkit) {-->
<!--                    window.webkit.messageHandlers.NativeClient.postMessage(message);-->
<!--                }-->
<!--            }-->
<!---->
<!--            function getParameters() {-->
<!--                const result = {};-->
<!---->
<!--                if (!window.location.search) {-->
<!--                    return result;-->
<!--                }-->
<!---->
<!--                const queryParams = new URLSearchParams(window.location.search);-->
<!---->
<!--                queryParams.forEach((value, key) => {-->
<!--                    result[key] = value;-->
<!--                });-->
<!---->
<!--                result.test = result.test === "true";-->
<!--                result.invisible = result.invisible === "true";-->
<!--                result.hideShield = result.hideShield === "true";-->
<!--                result.webview = true;-->
<!---->
<!--                return result;-->
<!--            }-->
<!--        </script>-->
<!---->
<!--        <script-->
<!--                src="https://smartcaptcha.yandexcloud.net/captcha.js?render=onload&onload=onSmartCaptchaReady"-->
<!--                defer-->
<!--        ></script>-->
<!--        <script>-->
<!--            function callback(token) {-->
<!--                console.log(callback);-->
<!--            }-->
<!--        </script>-->
    </head>

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
        <label >
            <h2>

            <?php
            if (isset($_SESSION['message'])){
                echo ($_SESSION['message']);
                unset($_SESSION['message']);
            }
            ?>
            </h2>
        </label>

        <form  class="registration" align="center" id="regForm" method="POST" action="./scripts/addUser.php" >
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

<!--            <span id="messageReg" style="font-size: 0.8em; color: #888;">-->
<!--                --><?php
//                    if (isset($_SESSION['message'])){
//                        echo ($_SESSION['message']);
//                    }
//                ?>
<!--            </span>-->
<!---->
<!---->

<!--            <div id="captcha-container" class="smart-captcha" ...>-->
<!--                <input type="hidden" name="smart-token" value="ysc1_BfIZiCNyd0IxmNXXd25J5TUecCai2nLiPeDSu3Eh817e370c">-->
<!--                ...-->
<!--            </div>-->

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



<!--    <script src="public/js/menu.js"></script>-->
    <script src="../../public/js/checkPassRegistr.js"></script>
    <script src="https://smartcaptcha.yandexcloud.net/captcha.js" defer></script>

    <!--    <script src="https://smartcaptcha.yandexcloud.net/captcha.js" defer></script>-->
<!--    <script src="../../public/js/captcha.js"></script>-->
<!--    <script src = "https://smartcaptcha.yandexcloud.net/captcha.js?render=onload&onload=onSmartCaptchaReady" defer></script>-->
</body>
</html>