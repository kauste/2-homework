<?php
require __DIR__ . '/Kibiras3.php';

$renkamAkmenis3 = new Kibiras3;

$renkamAkmenis3 -> prideti1Akmeni();
echo $renkamAkmenis3 -> kiekPririnktaAkmenu() . '<br>';
$renkamAkmenis3 -> prideti1Akmeni();
echo $renkamAkmenis3 -> kiekPririnktaAkmenu(). '<br>';
$renkamAkmenis3-> pridetiDaugAkmenu(40);
echo $renkamAkmenis3 -> kiekPririnktaAkmenu(). '<br>';