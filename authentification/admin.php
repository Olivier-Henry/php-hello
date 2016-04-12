<?php
session_start();
include './fonctions_flash.php';

if(!isset($_SESSION['role'])){
    header('Location: login.php', 301);
}

echo getFlash()."<br>";

echo "bienvenue, ";
echo $_SESSION['user'];
echo " vous avez le role ";
echo $_SESSION['role'];

?>
<br>
<a href="logout.php">Déconnection</a>
