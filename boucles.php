<?php
echo "<ol>\n";
for($i = 1; $i<= 10; $i++){
    echo "\t<li>".$i."</li>\n";
}
echo "</ol>\n";

?>

<table>
    <?php 
    for($i = 1; $i<=10; $i++){
        if($i%2 == 0){
        echo "<tr style='background-color: #ABCDEF'>";
        }else{
            echo "<tr>";
        }
        for($k = 1; $k<=10; $k++){
            echo "<td>", $i*$k, "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
