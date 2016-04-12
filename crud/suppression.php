<?php
include './lib.php';
include './config.php';
$numLigne = filter_input(INPUT_GET, 'ligne', FILTER_SANITIZE_NUMBER_INT);

//récupération ndes données
$data = getData(STRATEGY,'../data/contact.json');

//suppression d'une ligne
unset($data[$numLigne]);
$data = array_values($data);
//Persistence
persistData(STRATEGY, $data);

//redisrection vers l'index'
header('location: index.php',301);
