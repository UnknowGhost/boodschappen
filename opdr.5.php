<?php
session_start(); /*Sessie start*/
if(isset($_GET['verwijder'])) { /*variable verwijder gemaakt met get methode*/
    $hulparray = []; /*Lege array hulparray aangemaakt*/
    foreach($_SESSION['boodschappen'] as $boodschap) { /*Loop word aangemaakt met variabel boodschap*/
        if($boodschap != $_GET['verwijder']) { /* Boodschap niet gelijk aan get methode verwijder*/
            $hulparray[] = $boodschap; /*Dan word lege array variable boodschap*/
        }
    }
    $_SESSION['boodschappen'] = $hulparray;
}
if(isset($_GET['leegmaken']) && $_GET['leegmaken'] == 'ja') {
    $_SESSION['boodschappen'] = [];
}
if(!isset($_SESSION['boodschappen'])) {
    $_SESSION['boodschappen'] = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];
}
if(isset($_POST['boodschap'])) {
    array_push($_SESSION['boodschappen'], $_POST['boodschap']);
}
echo "<ul>";
foreach($_SESSION['boodschappen'] as $b) {
    echo "<li><a href='opdr.5.php?verwijder=$b'>$b</a></li>";
}
echo "</ul>";
?>

<form action="opdr.5.php" method="post">
    <input type="text" name="boodschap">
    <input type="submit">
</form>

<a href="opdr.5.php?leegmaken=ja">Laat boodschappen verdwijnen</a> <!--Dit is de knop om alle boodschappen te verwijderen-->