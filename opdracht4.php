<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 23-9-2019
 * Time: 10:50
 */

$boodschappen = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];
$l = count($boodschappen);
if (isset($_GET["boodschap"])) {
    $boodschap = $_GET['boodschap'];
    echo $boodschap;
    echo "<br>";
}
for($a = 0; $a < $l; $a++) {
    echo $boodschappen[$a];
    echo "<br>";
}