<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 29-10-2019
 * Time: 13:16
 */

$dbh = new PDO('mysql:host=localhost;dbname=boodschappen2;port=8889', 'root', 'root');
$boodschappen = $dbh->query('SELECT * from product');
foreach ($boodschappen as $boodschap) {
    echo "<li>".$boodschap{'omschrijving'}."</li>";
}

if(isset($_GET{'idboodschap'})) {
    $idproduct = $_GET{'idproduct'};
    $omschrijving = $_GET{'omschrijving'};
    $sql = "insert into boodschappen2 (idproduct, omschrijving) values ($idproduct, '$omschrijving')";
    $dbh->query($sql);
}

//fix insert//
