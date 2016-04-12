<?php
include './lib.php';
include './config.php';

//Recup des données
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
$ville = filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_STRING);
$numLigne = filter_input(INPUT_POST, 'ligne', FILTER_SANITIZE_NUMBER_INT);

$submit =  filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);

$data = getData(STRATEGY,"../data/contact.json");

 
 if($submit == 'ajouter'){
   
    array_push($data, [
        'nom' => $nom,
        'age' => $age,
        'ville' => $ville
    ]);
    
   
}else{
    $data[$numLigne]['nom'] = $nom;
    $data[$numLigne]['age'] = $age;
    $data[$numLigne]['ville'] = $ville;
}

persistData(STRATEGY, $data);

header("Location: index.php", 302);

