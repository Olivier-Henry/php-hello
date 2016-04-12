<?php
include './lib.php';
include './config.php';

$numLigne = filter_input(INPUT_GET, 'ligne', FILTER_SANITIZE_NUMBER_INT);

if ($numLigne == null) {
    $submitAction = "ajouter";
    $nom = '';
    $age = '';
    $ville = '';
} else {
    $data = getData(STRATEGY, '../data/contact.json');
    $submitAction = "modifier";
    $nom = $data[$numLigne]['nom'];
    $age = $data[$numLigne]['age'];
    $ville = $data[$numLigne]['ville'];
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>formulaire</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <form method="POST" action="persist.php">
            <label>Nom:
                <input type="text" name="nom" value="<?= $nom; ?>" required>
            </label><br>
            <label>Age:
                <input type="number" name="age" value="<?= $age; ?>" required>
            </label><br>
            <label>Ville:
                <input type="text" name="ville" value="<?= $ville; ?>" required>
            </label><br>

            <input type="hidden" name="ligne" value="<?= $numLigne; ?>">

            <button type="submit" name="submit" value="<?= $submitAction; ?>">Envoyer</button>
        </form>
    </body>
</html>

