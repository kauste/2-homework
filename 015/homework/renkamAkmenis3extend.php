<?php
require __DIR__ . '/KibirasNePo1.php';

$renkamAkmenis3 = new KibirasNePo1;

$renkamAkmenis3 -> prideti1Akmeni();
echo $renkamAkmenis3 -> kiekPririnktaAkmenu(). '<br>';
$renkamAkmenis3 -> pridetiDaugAkmenu(35);
echo $renkamAkmenis3 -> kiekPririnktaAkmenu(). '<br>';