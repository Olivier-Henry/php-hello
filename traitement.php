<?php

include 'config.php';

//Récupération des variables
$tokenForm = filter_input(INPUT_POST, 'token');

if($tokenForm != $token){
    echo "Le formulaire ne respecte pas les erreurs de sécurité";
    exit;
}

$nom = filter_input(INPUT_POST,'input_nom', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_POST, 'input_age', FILTER_SANITIZE_NUMBER_INT);
$ok = filter_input(INPUT_POST, 'input_ok', FILTER_SANITIZE_STRING);
$languages = filter_input(INPUT_POST, 'languages', FILTER_SANITIZE_STRING,  FILTER_REQUIRE_ARRAY);
if($languages == null){
    $languages = [];
}

var_dump($_POST);

echo "hello $nom<br>";
echo "vous avez $age ans<br>";

if($ok == null){
    echo "Vous n'avez pas coché la case";
    
}else{
    echo "Vous avez coché la case";
}

