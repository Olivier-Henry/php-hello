<?php

function getDataFromCsv($path) {
    $path = str_replace(".json", ".csv", $path);
    $fileContent = file_get_contents($path);
    $lines = explode("\n", $fileContent);

    $output = [];

    $nbLignes = count($lines);
    for ($i = 0; $i < $nbLignes; $i++) {
        if ($lines[$i] != '') {
            $cols = explode(";", $lines[$i]);
            if (count($cols) == 3) {
                array_push($output, [
                    'nom' => $cols[0],
                    'age' => $cols[1],
                    'ville' => $cols[2]
                ]);
            }
        }
    }

    return $output;
}

function showTable($data) {
    $html = "<table border=1>";
    $nbData = count($data);
    for ($i = 0; $i < $nbData; $i++) {
        $html .= "<tr>";
        $html .= showTableLine($data[$i], $i);
        $html .= "</tr>\n";
    }
    $html .= "</tr>";
    //<table><tr>ShowTableLine()</tr></table>

    return $html;
}

function showTableLine($data, $numeroLigne) {
    $html = '';
    foreach ($data as $td) {
        $html .= "<td>$td</td>";
    }
    $html .= "<td><a href='suppression.php?ligne=$numeroLigne'>Supprimer</a></td>";
    $html .= "<td><a href='formulaire.php?ligne=$numeroLigne'>Modifier</a></td>";
    return $html;

//<td>
}

/**
 * Ecriture d'un tableau associatif contenant des tableaux indicés vers un fichier csv
 * @param array $data
 */
function persistToCsv($data) {
    $path = str_replace(".json", ".csv", $path);
    $nbData = count($data);
    $csv = '';
    for ($i = 0; $i < $nbData; $i++) {
        $line = $data[$i];
        $csv .= $line['nom'] . ';' . $line['age'] . ';' . $line['ville'];
        if ($i < $nbData - 1) {
            $csv .= "\n";
        }
    }
    //if ($csv != '') {
        file_put_contents("../data/contact.csv", $csv);
    //}
}

function persistToJson($data){
    $path = str_replace(".csv", ".json", $path);
    file_put_contents('../data/contact.json', json_encode($data));
}

function getDataFromJson($path){
    $path = str_replace(".csv", ".json", $path);
    $json = file_get_contents($path);
    return json_decode($json, true);
}

function getData($strategy, $path){
    switch ($strategy) {
        case 'json':
            $data = getDataFromJson($path);
            break;
        case 'csv':
            $data = getDataFromCsv($path);
            break;
        default:
            echo 'Format inconnu';
            exit;
    }
    
    return $data;
}

function persistData($strategy, $data){
    switch ($strategy) {
        case 'json':
            persistToJson($data);
            break;
        case 'csv':
            persistToCsv($data);
            break;
        default:
            echo 'Format inconnu';
            exit;
    }
}
