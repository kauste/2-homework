<?php
require __DIR__.'/Kibiras2.php';

$kibirelis1 = new Kibiras2;
$kibirelis2 = new Kibiras2;
$kibirelis3 = new Kibiras2;

$kibirelis1 -> prideti1Akmeni();
$kibirelis1 ->pridetiDaugAkmenu(5);
$kibirelis2 -> prideti1Akmeni();
$kibirelis2 ->pridetiDaugAkmenu(8);
$kibirelis3 -> prideti1Akmeni();
$kibirelis3 ->pridetiDaugAkmenu(10);

echo $kibirelis1 -> get();
