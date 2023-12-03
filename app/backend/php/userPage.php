<?php
session_start();

if(!isset($_SESSION['logged-in'])){

        header("Location: ./loginPage.php");
}else{


    if(!$_SESSION['logged-in']) {
        header("Location: ./loginPage.php");
    }
 else {

     $host = 'db';
     $user = 'root';
     $pass = 'example';
     $db = "mydb1";

     $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $queryFunc = file_get_contents("./scripts/sql/getPerson.sql");
     $query = $pdo->prepare($queryFunc);
     $query->execute([
         'UserId' => $_SESSION['user-id'],
     ]);

     $_SESSION['userData']=$query->fetchAll();

 }
}

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
        <link href="../../public/css/table.css" rel="stylesheet" type="text/css">


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
<h1 align="center"><?php
    echo ("Мой профиль");
    ?></h1>
<br>
<h3 align="center">

<?php
if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

?>
</h3>
<?php
if(isset($_SESSION['logged-in'])) {
    if ($_SESSION['logged-in']) {
        echo '<table class="content-table" align="center" width="100%" >
            <tr>
                <th>Имя                 
</th>
                <td style="vertical-align: top;">';
        echo $_SESSION['userData'][0]['FirstName'];
        echo '</td>
            </tr>
            <tr>
                <th>Фамилия
    </th>
                <td style="vertical-align: middle;">';
        echo $_SESSION['userData'][0]['LastName'];
        echo '</td>
            </tr>
            <tr>
                <th>День рождения Год-Месяц-День </th>
                <td style="vertical-align: bottom;">
                
        ';
        echo $_SESSION['userData'][0]['BirthDay'];
        echo '        
</td>
            </tr>
        

           </table>';
    } else {
    echo '<h2>Войдите в аккаунт</h2>';
    }
}
?>
<form action="userPageChange.php">

<button >Изменить данные профиля</button>
</form>






<script src="../../public/js/checkPassRegistr.js"></script>
<script src = "https://smartcaptcha.yandexcloud.net/captcha.js?render=onload&onload=onSmartCaptchaReady"
        defer></script>
</body>
</html>