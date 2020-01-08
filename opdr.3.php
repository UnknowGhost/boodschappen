<?php
$boodschappen = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];
$plaatjes = ["aardappel", "aardbeien", "pakenmelk", "yogurt"]

?>

<div>
    <ul>
        <?php
        foreach ($boodschappen as $lijst) {
            echo "<li>" . $lijst . "</li>";
        }
        foreach ($plaatjes as $photo) {
            echo "<li> <img src='php/". $photo .".jpg'></li>";
        }
        ?>
    </ul>
</div>