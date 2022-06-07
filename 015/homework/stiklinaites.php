<?php
require __DIR__ . '/Stikline.php';
$stikline200 = new Stikline;
$stikline150 = new Stikline;
$stikline100 = new Stikline;

$stikline200 -> stikline(200);
$stikline200 -> ipilti(300);
$ispilta = $stikline200 -> ispilti();
echo $ispilta . '<br>';

$stikline150 -> stikline(150);
$stikline150 -> ipilti($ispilta);
$ispilta2 = $stikline150 -> ispilti();
echo $ispilta2. '<br>';

$stikline100 -> stikline(100);
$stikline100 -> ipilti ($ispilta2);
echo $stikline100 -> ispilti();