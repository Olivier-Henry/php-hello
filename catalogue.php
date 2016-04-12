<?php
$catalogue = array(
    array(
        'designation' => 'La peste',
        'prix' => 10.80,
        'categorie' => 'Roman',
        'auteur' => 'Albert Camus',
        'editeur' => 'Gallimard',
    ),
    array(
        'designation' => 'PHP pour les nuls',
        'prix' => 15.80,
        'categorie' => 'Informatique',
        'auteur' => 'Janet Valade',
        'editeur' => 'First Interact',
    ),
    array(
        'designation' => 'Essais',
        'prix' => 38.70,
        'categorie' => 'Philosophie',
        'auteur' => 'Montaigne',
        'editeur' => 'Pocket',
    ),
    array(
        'designation' => 'Winston Churchill',
        'prix' => 28.30,
        'categorie' => 'Biographie',
        'auteur' => 'François Kersaudy',
        'editeur' => 'Tallandier',
    ),
    array(
        'designation' => 'Barcelone week end',
        'prix' => 9.00,
        'categorie' => 'Guide de voyage',
        'auteur' => 'Michelin',
        'editeur' => 'Michelin',
    ),
);
var_dump(array_keys($catalogue[0]));
?>
<table border="1">
    <tr>
        <?php
        //entete
        $headers = array_keys($catalogue[0]);
        for ($i = 0; $i < count($headers); $i++) {
            echo "<th>" . $headers[$i] . "</th>";
        }
        ?>
    </tr>
    <?php
    foreach ($catalogue as $tValue) {
        echo "<tr>";
        foreach ($tValue as $key => $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    ?>
</table>