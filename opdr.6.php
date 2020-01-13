<?php
$dbc = mysqli_connect('localhost', 'root', '', 'boodschappen') or die ('Error connecting'); //Verbind data base//$query = "SELECT * FROM product";
$query = "SELECT * FROM product";
$result = mysqli_query($dbc,$query) or die ("Error querying"); //geef melding als niet werkt//
echo "<table>";
while ($row = mysqli_fetch_array($result)) {
    $id = $row['idproduct'];
    $omschrijving = $row['omschrijving'];
    echo '<tr>';
    echo "<td>$id</td>";
    echo "<td>$omschrijving</td>";
    echo '</tr>';
}
echo '</table>';
