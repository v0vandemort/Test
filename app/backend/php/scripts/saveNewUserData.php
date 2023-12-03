<?php

session_start();


$host = 'db';
$user = 'root';
$pass = 'example';
$db = "mydb1";

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$birthDay = $_POST['birthday'] ?? '';
$birthDay = date("Y.m.d", strtotime($birthDay));;
$password = $_POST['password'] ?? '';
$passwordConfirm = $_POST['passwordConfirm'] ?? '';

$queryP = 'UPDATE People SET';
$queryU = 'UPDATE Users SET';

$currentUserId = $_SESSION['user-id'];

$updateDataFormPeople = [];
$updateDataFormUser = [];

if (!empty($firstName)) {
    $updateDataFormPeople[] = "FirstName = '$firstName'";
}

if (!empty($lastName)) {
    $updateDataFormPeople[] = "LastName = '$lastName'";
}

if (!empty($birthDay)) {
    $updateDataFormPeople[] = "BirthDay = '$birthDay'";
}

if (!empty($email)) {
    $updateDataFormUser[] = "Email = '$email'";
}

if (!empty($phone)) {
    $updateDataFormUser[] = "Phone = '$phone'";
}

if (!empty($password)) {
    $updateDataFormUser[] = "Password = '$password'";
}


$queryUser = "";
if (!empty($updateDataFormUser)) {
    $queryUser = $queryU;
    $queryUser .= ' ' . implode(', ', $updateDataFormUser);
    $queryUser .= " WHERE UserId='$currentUserId'";
} else {

}
$queryPeople = "";
if (!empty($updateDataFormPeople)) {
    $queryPeople = $queryP;
    $queryPeople .= ' ' . implode(', ', $updateDataFormPeople);
    $queryPeople .= " WHERE Id='$currentUserId'";
} else {

}




try {
if (!empty($queryPeople)) {
    $query = $pdo->prepare($queryPeople);
    $query->execute();
}
if (!empty($queryUser)) {
    $query = $pdo->prepare($queryUser);
    $query->execute();
}

$_SESSION['message']='Изменения сохранены';

header("Location: ../userPage.php");

} catch (PDOException $e) {
   echo "ERROR:".$e->getMessage();
   echo $queryPeople;
   echo $queryUser;
}
