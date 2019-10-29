<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 24-9-2019
 * Time: 13:26
 */

$dbh = new PDO('mysql:host=localhost;dbname=boodschappen2;port=8889', 'root', 'root');
$boodschappen = $dbh->query('SELECT * from product');

foreach ($boodschappen as $boodschap) {
    echo "<li>".$boodschap{'omschrijving'}."</li>";
}
