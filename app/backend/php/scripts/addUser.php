<?php
session_start();

require_once ("setUser.php");



$email=$user->getEmail();
$phone=$user->getPhone();
$firstName=$user->getFirstName();
$lastName=$user->getLastName();
$birthDay=$user->getBirthday();
$password=$user->getPassword();


$queryFunc=file_get_contents("./sql/addUser.sql");
$query = $pdo->prepare($queryFunc);
$query->execute(['email' => $email,
    'phone' => $phone,
    'firstName' => $firstName,
    'birthDay' => $birthDay,
    'password' => $password]);


