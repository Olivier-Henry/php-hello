<?php

session_start();

include './fonctions_flash.php';

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$loginAdmin = 'admin';
$passwordAdmin = '123';

if ($login == $loginAdmin and $password == $passwordAdmin) {
    $_SESSION['role'] = 'admin';
    $_SESSION['user'] = $login;
    setFlash("Bonjour $login, vous êtes authentifié");
    //redirection
    header('location: admin.php', 301);
}else{
    header('location: login.php', 301);
}

