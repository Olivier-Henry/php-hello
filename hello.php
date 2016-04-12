<h1>
    <?php
    if (isset($_GET['age'])) {
        $age = $_GET['age'];
        var_dump($_GET);
    } else {
       echo "vous devez saisir un age";
       exit;
    }

    $message = $age >= 18 ? "majeur" : "Mineur";
    echo $message, "<br>";

    switch ($age) {
        case $age < 5 :
            $message = "bébé";
            break;
        case $age >= 5 && $age < 12 :
            $message = "Enfant";
            break;
        case $age >= 12 && $age < 18 :
            $message = "adolescent";
            break;
        default:
            $message = "adulte";
    }

    echo $message . "<br>";
    ?>
</h1>