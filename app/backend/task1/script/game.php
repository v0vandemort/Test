<?php

session_start();


if (!isset ($_SESSION['game'])) {

    $_SESSION['game'] = 'started';
    $lastNum = $_POST['lastNum'];
    $_SESSION['lastNum'] = $lastNum;
    $tries = $_POST['tries'];
    $_SESSION['tries'] = $tries;
    $_SESSION['triesLeft'] = $tries;
    $neededNum = rand(1, $lastNum);
    $_SESSION['neededNum'] = $neededNum;
    echo '
<section >
        <h1 align="center">Задача 1 - Угадай число</h1>
        <h1 align="center">Игра началась</h1>
        <h5 align="center">Нужно угадать число от 1 до ', $_SESSION['lastNum'], '</h5>
        <h5 align="center">У вас всего  ', $_SESSION['tries'], ' попыток.</h5>
        <h5 align="center">Остаток:  ', $_SESSION['triesLeft'], '.</h5>

    </section>';
    echo '   
    <form id="gameFrom">
        <label>Введите число</label>
        <input name="curNum" id="curNum" type="number" required>
        <button type="button" onclick="playGame()">Пробуем</button>
    </form >
    <pre>', print_r($_SESSION), '
    
</pre>
';
} else {
    $currentNum = $_POST['curNum'];
    $_SESSION['curNum'] = $currentNum;
    $_SESSION['triesLeft'] -= 1;


    if ($_SESSION['triesLeft'] > 0) {

        if ($_SESSION['neededNum'] == $_SESSION['curNum']) {

            echo '<h4>Поздравляю, вы угадали число!</h4>';
            echo '<h4>Я загадал', $_SESSION['curNum'], '</h4>';
            unset($_SESSION);
        } else {
            echo '
<section >
        <h1 align="center">Задача 1 - Угадай число</h1>
        <h1 align="center">Игра началась</h1>
        <h5 align="center">Нужно угадать число от 1 до ', $_SESSION['lastNum'], '</h5>
        <h5 align="center">У вас всего  ', $_SESSION['tries'], ' попыток.</h5>
        <h5 align="center">Остаток:  ', $_SESSION['triesLeft'], '.</h5>

    </section>';

            if ($_SESSION['neededNum'] < $_SESSION['curNum']) {
                echo '<h4>Ваше число больше, чем загаданное мной.</h4>';
            }

            if ($_SESSION['neededNum'] > $_SESSION['curNum']) {
                echo '<h4>Ваше число меньше, чем загаданное мной.</h4>';
            }
            echo '   
    <form id="gameFrom">
        <label>Введите число</label>
        <input id="curNum" name="curNum" type="number" required>
        <button type="submit">Пробуем</button>
    </form>
<pre>

<pre>', print_r($_SESSION), '
    
</pre>

';
        }
    } else {
        echo '<h4>Поздравляю, вы не угадали число!</h4>';
        echo '<h4>Я загадал', $_SESSION['curNum'], '</h4>';
        $_SESSION = [];
    }
}
?>
