<?php
if (!file_exists("message.txt")) {
    echo "Le fichier n'existe pas";
    exit;
}

//Lecture du fichier
$messages = file_get_contents("message.txt");

//traitement form
if (isset($_POST['submit'])) {
    $inputMessage = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));
    if (!empty($inputMessage)) {
        $messages = $inputMessage . "\n" . $messages;
        file_put_contents("message.txt", $messages);
    }
}
?>


<!DOCTYPE html>

<html>
    <head>
        <title>upload</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <form method="POST" action="messages.php">
            <input type="text" name="message">
            <button type="submit" value="Envoyer" name="submit">Envoyer</button>
        </form>

        <div id="message">
            <?php echo nl2br($messages); ?>
        </div>
    </body>
</html>
