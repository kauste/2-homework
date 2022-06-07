<?php
require __DIR__ . '/Kibiras1.php';
$raudonasKibiras = new Kibiras1;
$melynasKibiras = new Kibiras1;

echo '--------Raudonas kibiras -------------<br>';
$raudonasKibiras -> prideti1Akmeni();
echo $raudonasKibiras -> kiekPririnktaAkmenu(). '<br>';
$raudonasKibiras -> prideti1Akmeni();
echo $raudonasKibiras -> kiekPririnktaAkmenu(). '<br>';
$raudonasKibiras -> pridetiDaugAkmenu(100);
echo $raudonasKibiras -> kiekPririnktaAkmenu(). '<br>';

echo '--------Melynas kibiras -------------<br>';
$melynasKibiras -> pridetiDaugAkmenu(30);
echo $melynasKibiras -> kiekPririnktaAkmenu(). '<br>';
$melynasKibiras -> prideti1Akmeni();
echo $melynasKibiras -> kiekPririnktaAkmenu(). '<br>';
$melynasKibiras -> pridetiDaugAkmenu(5);
echo $melynasKibiras -> kiekPririnktaAkmenu(). '<br>';