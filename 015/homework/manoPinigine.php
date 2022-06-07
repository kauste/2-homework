<?php
require __DIR__ . '/Pinigine.php';

$manoPinigine = new Pinigine;
$manoPinigine -> ideti(5000);
echo $manoPinigine -> skaiciuoti();
echo $manoPinigine -> monetos();
echo $manoPinigine -> banknotai();
$manoPinigine -> ideti (0.50);
echo $manoPinigine -> monetos();
echo $manoPinigine -> banknotai();
echo $manoPinigine -> skaiciuoti();
$manoPinigine -> ideti(35);
echo $manoPinigine -> skaiciuoti();
echo $manoPinigine -> monetos();
echo $manoPinigine -> banknotai();
$manoPinigine -> ideti(2);
echo $manoPinigine -> skaiciuoti();
echo $manoPinigine -> monetos();
echo $manoPinigine -> banknotai();
$manoPinigine -> ideti(-2);
echo $manoPinigine -> skaiciuoti();
echo $manoPinigine -> monetos();
echo $manoPinigine -> banknotai();
