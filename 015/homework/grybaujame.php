<?php
require __DIR__ .'/Krepsys.php';
require __DIR__ . '/Grybas.php';

$manoKrepsys = New Krepsys;
$manoKrepsys -> dydis;
$prigrybauta = 0;
do {
$naujasGrybas = New Grybas;
if ($naujasGrybas -> arValgomas()){
    if(!($naujasGrybas -> arSukirmijes())){
        $prigrybauta += ($naujasGrybas ->kiekSveria());
    }
}

} while($prigrybauta < 300);
echo '<br>'. $prigrybauta . '<br>';


