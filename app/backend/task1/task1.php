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
        <h1 align="center">Задача 1 - Угадай число</h1>

    </section>
<?php
    if(isset ($_SESSION['game'])){
    echo '
<section >
        <h1 align="center">Задача 1 - Угадай число</h1>
        <h1 align="center">Игра началась</h1>
        <h5 align="center">Нужно угадать число от 1 до ', $_SESSION['lastNum'], '</h5>
        <h5 align="center">У вас всего  ', $_SESSION['tries'], ' попыток.</h5>
        <h5 align="center">Остаток:  ', $_SESSION['triesLeft'], '.</h5>

    </section>
    <form id="gameFrom">
        <label>Введите новое число</label>
        <input id="curNum" name="curNum" type="number" required>
        <button type="button" onclick="playGame()">Пробуем</button>
    </form>
        <pre>', print_r($_SESSION), '
    
</pre>

    ';
    } else{
        echo '
    }
    <form id="gameFrom">
        <label>Угадываем число от 1 до</label>
        <input id="lastNum" class="lastNum" type="number" name="lastNum" required>
        <label>Попыток нужно: </label>
        <input id="tries" class="tries" type="number" name="tries" required>
        <button type="button" onclick="startGame()">Начать угадывать</button>
    </form>

    <pre>', print_r($_SESSION), '
    
</pre>


';}
?>
</main>

    <form action="script/newGame.php">

        <button >New Game</button>
    </form>



<script src="js/ajax.js"></script>

</body>
</html>