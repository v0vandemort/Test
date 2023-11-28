<?php

session_start();
echo "<pre>";
print_r($_POST);
echo "</pre>";

$host = 'db';
$user = 'root';
$pass = 'example';
$db="mydb1";

$pdo=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//require_once ("../../../public/connect.php");
//session_start();
//
////require_once ("setUser.php");
//$user = new user();
//require_once ("../../../public/connect.php");
//
//
//$email=$_POST['email']??'';
//$phone=$_POST['phone']??'';
//$name=$_POST['firstName']??'';
//$lastname=$_POST['lastName']??'';
//$birthday=$_POST['birthday']??'';
//$password=$_POST['password']??'';
//
//
//$user->setEmail($email);
//$user->setPhone($phone);
//$user->setFirstName($name);
//$user->setLastName($lastname);
//$user->setBirthday($birthday);
//$user->setPassword($password);
//
//
//
//$email=$user->getEmail();
//$phone=$user->getPhone();
//$firstName=$user->getFirstName();
//$lastName=$user->getLastName();
//$birthDay=$user->getBirthday();
//$password=$user->getPassword();
//
//
//$queryFunc=file_get_contents("./sql/addUser.sql");
//
//$query = $pdo->prepare($queryFunc);
//$query->execute(['email' => $email,
//    'phone' => $phone,
//    'firstName' => $firstName,
//    'birthDay' => $birthDay,
//    'password' => $password]);
//
//

//require_once("setUser.php");

$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$birthDay = $_POST['birthday'] ?? '';
$birthDay = date("Y.m.d", strtotime($birthDay));;
$password = $_POST['password'] ?? '';
$passwordConfirm = $_POST['passwordConfirm'] ?? '';

if ($password==$passwordConfirm){


//    $myarray=[$email,$phone,$firstName,$lastName,$birthDay,$password];

    $queryFunc = file_get_contents("./sql/addPeople.sql");
    $query = $pdo->prepare($queryFunc);
    $query->execute([
        'firstName' => $firstName,
        'lastName' => $lastName,
        'birthDay' => $birthDay,
    ]);

    $userId = $pdo->lastInsertId();

    $queryFunc = file_get_contents("./sql/addUser.sql");
    $query = $pdo->prepare($queryFunc);
    $query->execute([
        'email' => $email,
        'phone' => $phone,
        'password' => $password,
        'userId' => $userId

    ]);
    $_SESSION["message"]="Поздравляем с регистрацией";
    //    echo "<pre>";
//    print_r($_POST);
//    echo "</pre>";
//
//    echo "<pre>";
//    print_r($myarray);
//    echo "</pre>";

}else{
    $_SESSION["message"]="Пароли не совпадают, перепроверьте";

}
echo $_SESSION["message"];
