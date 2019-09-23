<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 23-9-2019
 * Time: 09:17
 */

$boodschappen = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];
$boodschapplaatjes = ['<img src="img/p1.jpg">', '<img src="img/p2.jpg">', '<img src="img/p3.jpg">', '<img src="img/p4.jpg">'];
$l = count($boodschappen);

for($a = 0; $a < $l; $a++) {
    echo $boodschappen[$a];
    echo $boodschapplaatjes[$a];
    echo "<br>";
}
