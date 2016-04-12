<?php

$nom = [
    "le chien",
    "le chat",
    "mon ami",
    "le développeur",
    "le chef de projet",
    "le client",
    "le formateur",
    "le gateau",
    "l'ordinateur",
    "la voiture",
    "le vélo",
    "le médecin",
    "l'enfant",
    "le graphiste",
    "l'oiseau",
    "le programme",
    "le jeu",
    "la marmotte"
];

$verbe = [
    "mange",
    "regarde",
    "code",
    "fabrique",
    "admire",
    "aime",
    "déteste",
    "rencontre",
    "examine",
    "évalue",
    "percute",
    "ausculte",
    "dessine",
    "brocarde",
    "exécute",
    "lance",
    "écrit"
];

$complement = [
    "dans la voiture",
    "avec lenteur",
    "sur la tour Eiffel",
    "dans la cabane",
    "pour avoir une bonne note",
    "pour la bonne raison",
    "avec rapidité",
    "aujourd'hui",
    "sans hésitation",
    ""
];


for ($i = 0; $i <= 100; $i++) {
    echo $nom[rand(0, count($nom)-1)];
    echo " ";
    echo $verbe[rand(0, count($verbe)-1)];
    echo " ";
    echo $nom[rand(0, count($nom)-1)];
    echo " ";
    echo $complement[rand(0, count($complement)-1)];
    echo "<br>";
}