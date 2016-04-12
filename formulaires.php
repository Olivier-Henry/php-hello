<?php
include 'config.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>formulaire</title>
    </head>
    <body>
        <form method="POST" action="traitement.php">
            <label for="nom">Nom:</label>
            <input type="text" name="input_nom" id="nom">

            <label for="age">Age:</label>
            <input type="text" name="input_age" id="age">

            <label>
                <input type="checkbox" name="input_ok" id="check_ok">
                J'accepte toutes vos conditions
            </label>

            <fieldset>
                <legend>Vous conaissez:</legend>
                <label>Java
                    <input type="checkbox" name="languages[]" value="Java">
                </label><br>
                <label>C#
                    <input type="checkbox" name="languages[]" value="C#">
                </label><br>
                <label>PHP
                    <input type="checkbox" name="languages[]" value="PHP">
                </label><br>
                <label>Cobol
                    <input type="checkbox" name="languages[]" value="Cobol">
                </label><br>
                <label>Ada
                    <input type="checkbox" name="languages[]" value="Ada">
                </label><br>
            </fieldset>

            <input type="hidden" name="token" value="<?php echo $token; ?>">

            <button type="submit" name="submit">Valider</button>
        </form>
    </body>
</html>





