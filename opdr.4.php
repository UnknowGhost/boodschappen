<h4>Producten</h4>
<form action="" method="post">
    <input type="text"name="bood">
    <input type="submit" name="submit" value="Send">
</form>


<?php session_start(); ?> <!--Sessie starten-->
<ol style="list-style-type:disc;">
    <li>aardappelen</li>
    <li>aardbeien</li>
    <li>3 pakken melk</li>
    <li>yoghurt</li>

    <?php
    if (!empty($_POST['submit'])) { /*Als post method word gebruikt*/
        $_SESSION['boodschappen'][] = $_POST['bood'];
        foreach ($_SESSION['boodschappen'] as $boodschap) {
            echo "<li>".$boodschap."</li>";
        }
    } else {
        $_SESSION['boodschappen'] = [];
    }
    ?>
</ol>
