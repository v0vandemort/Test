<?php
session_start();


$host = 'db';
$user = 'root';
$pass = 'example';
$db = "mydb1";

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(!isset($_SESSION['logged-in'])){

    header("Location: ./loginPage.php");
}else{


    if(!$_SESSION['logged-in']) {
        header("Location: ./loginPage.php");
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
    echo ("Все пользователи");
    ?></h1>

<?php
if(isset($_SESSION['logged-in'])) {
if ($_SESSION['logged-in']) {
    $queryFunc = file_get_contents("./scripts/sql/getAllPeople.sql");
    $query = $pdo->prepare($queryFunc);
    $query->execute();

    $_SESSION['people']=$query->fetchAll();




    echo '<table align="center" width="100%" >
            <tr>
                <th>Имя</th>
 
         
            
                <th>Фамилия</th>

            
                <th>День рождения Год-Месяц-День </th>
            </tr>
            
                
';$i=0;
    while ($i<count($_SESSION['people'])){
        echo '<tr><td align="center">';
        echo $_SESSION['people'][$i]['FirstName'];
        echo '</td>';
        echo '<td align="center">';
        echo $_SESSION['people'][$i]['LastName'];
        echo '</td>';
        echo '<td align="center">';
        echo $_SESSION['people'][$i]['BirthDay'];
        echo '</td>';
        echo '</tr>';
        $i++;

    }
    echo '
           </table>';
}else{
    header("Location: ./loginPage.php");
}
} else{
    header("Location: ./loginPage.php");

}
?>


<script src = "https://smartcaptcha.yandexcloud.net/captcha.js?render=onload&onload=onSmartCaptchaReady"
        defer></script>
</body>
</html>