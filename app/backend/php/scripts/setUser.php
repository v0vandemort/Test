<?php
session_start();

$user = new user();



$email=$_POST['email']??'';
$phone=intval($_POST['phone'])??'';
$name=$_POST['firstName']??'';
$lastname=$_POST['lastName']??'';
$birthday=$_POST['birthday']??'';
$password=$_POST['password']??'';


$user->setEmail($email);
$user->setPhone($phone);
$user->setFirstName($name);
$user->setLastName($lastname);
$user->setBirthday($birthday);
$user->setPassword($password);



