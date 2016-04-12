<?php

var_dump($_FILES);
if (isset($_FILES['fichier'])) {
    $uploadedFile = $_FILES['fichier'];
} else {
    echo "Aucun fichier a été chargé";
    exit;
}

$ok = true;

switch ($uploadedFile['error']) {
    case UPLOAD_ERR_OK:
        break;
    case UPLOAD_ERR_NO_FILE:
        echo "Vous devez sélectionner un fichier";
        $ok = false;
        break;
    case UPLOAD_ERR_INI_SIZE:
    case UPLOAD_ERR_FORM_SIZE:
        echo "Le fichier est trop lourd";
        $ok = false;
        break;
    default:
        echo "Erreur de type inconnu";
        $ok = false;
}

//Test de la taille du fichier
if (!$ok and $uploadedFile['size'] > 1024 * 1024) {
    echo "La taille du fichier est trop importante";
    $ok = false;
}

if ($ok) {
    $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($fileinfo, $uploadedFile['tmp_name']);

    $allowedMimeType = [
        'jpg' => 'image/jpg',
        'png' => 'image/png',
        'gif' => 'image/gif'
    ];

    $extension = array_search($mimeType, $allowedMimeType, true);
    if ($extension === false) {
        $ok = false;
        echo "Ce type de fichier n'est pas autorisé";
    }

    //exit;
}

if ($ok) {
    $imagesFolder = getcwd() . '/images';
    echo $imagesFolder;

    $targetName = uniqid('image_').'.'.$extension;

    if (move_uploaded_file($uploadedFile['tmp_name'], $imagesFolder . "/" . $targetName)) {
        echo "<br>Transfert réussi";
    } else {
        echo "<br>Transfert échoué";
    }
}
