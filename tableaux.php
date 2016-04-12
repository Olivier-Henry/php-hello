<?php

$tab = array(1, 5, 8);
$tab2 = [1, 5, 8];

echo "il y a ", count($tab), " éléments dans mon tableau<br>";

$taille = count($tab);

for ($i = 0; $i < $taille; $i++) {
    echo $tab[$i] . "<br>";
}

$tab3 = array(
    array(
        'nom' => 'HENRY',
        'age' => 36,
        'ville' => 'Bagneux'
    ),
    array(
        'nom' => 'WOOD',
        'age' => 27,
        'ville' => 'Paris'
    )
);

echo $tab3[1]['nom']." a ".$tab3[1]['age']." ans<br>";

foreach ($tab3 as $value) {
    foreach ($value as $key => $value) {
        echo $key." => ".$value."<br>";
    }
}

