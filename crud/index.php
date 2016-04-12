<?php
include './lib.php';
include './config.php';


?>
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width">
        
        
        <title>Contacts</title>
    </head>
    <body>
        <a href="formulaire.php">Ajouter un contact</a>
        <h1>Liste des contacts</h1>
        <?php echo showTable(getData(STRATEGY,"../data/contact.json"));?>
    </body>
</html>
