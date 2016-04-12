<?php

$data = [
    ['nom' => 'Vincent', 'age' => 26, 'ville' => 'Paris'],
    ['nom' => 'Pierre', 'age' => 32, 'ville' => 'Bordeaux'],
    ['nom' => 'Marie', 'age' => 24, 'ville' => 'Lyon'],
];

header("Content-type: application/csv");
header("Content-disposition: attachement; filename=contact.csv");

$nbData = count($data);

for($i =0; $i<$nbData; $i++){
    echo $data[$i]['nom']."\t";
    echo $data[$i]['age']."\t";
    echo $data[$i]['ville'];
    
    if($i < $nbData-1){
        echo "\n";
    }
}

