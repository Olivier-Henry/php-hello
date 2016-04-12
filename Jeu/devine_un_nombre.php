<?php


$nb = filter_input(INPUT_POST, 'nb', FILTER_SANITIZE_NUMBER_INT);
$tentatives = filter_input(INPUT_POST, 'nb_tentatives', FILTER_SANITIZE_NUMBER_INT);
$deviner = filter_input(INPUT_POST, 'nb_deviner', FILTER_SANITIZE_NUMBER_INT);
//var_dump($_POST);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>title</title>
    </head>
    <body>
        <h1>Trouver le bon nombre entre 1 et 50</h1>
<?php

if ($nb != null && $tentatives != null && $deviner != null) {
    $tentatives++;
    if ($nb == $deviner) {
        echo "<h2>Bravo, vous avez trouvé le bon Nombre en $tentatives essais</h2>";
        echo "<a href='".$_SERVER['PHP_SELF']."'>Rejouer</a>";
    }else{
        echo "<h2>Désolé vous pouvez recommencer pour la $tentatives tentative</h2>";
        if($nb > $deviner){
            echo "<h3>Le nombre est moins grand</h3>";
        }else{
            echo "<h3>Le nombre est plus grand</h3>";
        }
    }
} else {
    $deviner = rand(1, 20);
    $tentatives = 1;
}
?>

        <form method="POST" action="devine_un_nombre.php">

            <label for="nombre">Nombre</label>
            <input type="text" name="nb" id="nombre">

            <input type="hidden" name="nb_tentatives" value="<?php echo $tentatives; ?>">
            <input type="hidden" name="nb_deviner" value="<?php echo $deviner; ?>">


            <button type="submit" name="submit">Jouer</button>

        </form>
    </body>
</html>





