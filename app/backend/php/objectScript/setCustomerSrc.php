<?php

require_once ("../../objects/people.php");

$lastname=$_POST['lastname']??'';
$name=$_POST['name']??'';
$birthday=$_POST['birthday']??'';
$level=$_POST['level']??'';
$phone=$_POST['name']??'';
$parentsName=$_POST['parentsName']??'';
$parentsPhone=$_POST['parentsPhone']??'';
$added=$_POST['added']??'';

$user=new user();
$user->setLastName();
$user->setName();
$user->setBirthday();
$user->setLevel();
$user->setPhone();
$user->setParentsName();
$user->setParentsPhone();


