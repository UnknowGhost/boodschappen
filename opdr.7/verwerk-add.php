<?php

//Wat er in ingevoerd veld is geschreven wordt opgehaald//
$boodschap = $_POST['boodschap']; //variabele boodschap aangemaakt//

//Data in database stoppen
//1. Verbinding maken met de database
$dhb = mysqli_connect('localhost', 'root', '', 'boodschappen') or die ("Error connecting");
//2. Query schrijven
$query = "INSERT INTO product VALUES (0, '$boodschap')"; //$boodschap is ingevoerde woord door gebruiker//
//3. Query uitvoeren
$result = mysqli_query($dhb, $query) or die ("Error in query");
//4. Verbinding verbreken
mysqli_close($dhb);

//Bevestigen dat het in de database staat
if($result){
    echo 'De volgende producten zijn toegevoegd aan de database: ';
    echo "<br>";
    echo $boodschap;
}else {
    echo "Sorry er is iets mis gegaan";
}

include "add.php";//form om het toe tevoegen aan de database//
