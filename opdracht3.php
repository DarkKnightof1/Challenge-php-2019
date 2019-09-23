<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 23-9-2019
 * Time: 09:17
 */

$boodschappen = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];
$l = count($boodschappen);

for($a = 0; $a < $l; $a++) {
    echo $boodschappen[$a];
    echo "<br>";
}
