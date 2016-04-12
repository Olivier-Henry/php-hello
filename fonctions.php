<?php

//signature (n,n)
function somme($n1, $n2) {
    return $n1 + $n2;
}

$fonction = function() {
    return 'fonction anonyme<br>';
};

echo somme(1, 2) . "<br>";

echo $fonction();

function sommeT(array $nombres) {
    return array_sum($nombres);
}

function sommeTboucle(array $nombre) {
    $total = 0;
    for ($i = 0; $i < count($nombre); $i++) {
        $total += $nombre[$i];
    }
    return $total . "<br>";
}

echo sommeTboucle([1, 3, 8, 5, 5, 4]);

function sommeArgs() {
    $nbArgs = func_num_args();
    $total = 0;
    for ($i = 0; $i < $nbArgs; $i++) {
        $total += (int) func_get_arg($i);
    }
    return $total;
}

echo sommeArgs(1, 3, 5, 12) . "<br>";

//function sommeArgs2($type, ...$nombres){
//var_dump($nombres);
//$total = 0;
//foreach ($nombres as $n) {
//$total += (int) $n;
//}
//
//if ($total > 1) {
//$type .= "s";
//}
//return "il y a $total $type";
//}
//
//echo sommeArgs2("papaye", 1, 2, 3) . "<br>";

function lien($href, $texte = 'lien') {
    return "<a href='$href'>$texte</a>";
}

echo lien("http://www.google.fr") . "<br>";
echo lien("http://www.google.fr", "Google") . "<br>";

function lienT(array $options) {
    if (!array_key_exists($options, 'http') || !array_key_exists($options, 'texte')) {
        return '';
    }
    return "<a href='" . $option['href'] . "'>" . $options['texte'] . "</a>";
}

//array( google => http://blahblah) en entrée
function generateNav(array $options) {
    $html = "<ul>\n";
    foreach ($options as $key => $value) {
        $html .= "<li style='display:inline-block; background-color: skyblue; padding: 5px;'>" . lien($value, $key) . "</li>\n";
    }
    $html .= "</ul>";
    //var_dump($html);
    return $html;
}

$tabLiens = array(
        "yahoo" => "http://www.yahoo.com",
        "Google" => "http://www.google.fr",
        "Microsoft" => "http://www.microsoft.com",
        "Orange" => "http://www.orange.fr"
        );

        //var_dump($tabLiens);

echo generateNav($tabLiens);
