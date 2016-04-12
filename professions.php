<?php
$professions = array(
    array(
        'code' => 7,
        'libelle' => 'Infographiste'
    ),
    array(
        'code' => 32,
        'libelle' => 'Architecte logiciel'
    ),
    array(
        'code' => 18,
        'libelle' => 'Développeur front-end'
    ),
    array(
        'code' => 19,
        'libelle' => 'Développeur back-end'
    ),
    array(
        'code' => 22,
        'libelle' => 'Développeur full-stack'
    ),
);
?>


<select name="job">
    <?php
    if(isset($_GET['code'])){
        $code = $_GET['code'];
    }
    
    foreach ($professions as $tvalue) {
        echo "<option value='" . $tvalue['code']."'";
        if($tvalue['code'] == $code){
            echo "selected";
        }
        echo ">" . $tvalue['libelle'] . "</option>\n";
    }
    ?>
</select>
