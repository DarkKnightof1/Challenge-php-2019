<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 24-9-2019
 * Time: 13:26
 */

$dbh = new PDO('mysql:host=localhost;dbname=boodschappen2;port=8889', 'root', 'root');
foreach($dbh->query('SELECT * from product') as $row) {
    print_r($row);

}
