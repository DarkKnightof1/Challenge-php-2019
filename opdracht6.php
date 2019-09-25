<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 24-9-2019
 * Time: 13:26
 */

$dbh = new PDO('mysql:host=localhost;dbname=boodschappen;port=8889', 'root', 'root');

$db_host     = "localhost";
$db_username = "root";
$db_password = "root";
$connection = mysqli_connect($db_host, $db_username, $db_password) or die("Error ");
$db = mysqli_select_db($connection, "boodschappen") or die("Error ");

$sql = mysqli_query($connection, "SELECT * FROM idproduct");

while($row = mysqli_fetch_array($sql)) {
    $boodschappen[] = $row['idproduct'];

    echo 'idproduct';
}