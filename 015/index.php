<?php 
require __DIR__.'/Bebras.php';

$bebras1 = new Bebras('Jonas', []);
$bebras2 = new Bebras('Janina', [1, 2, 3]);// jei parasysim skaiciu, pavers i stringa
$bebras3 = $bebras1; // taspats bebras; pagal referenca, viskas, kas nutiktu treciam nutiktu ir pirmam;
$bebras4 = clone($bebras1); // nuklonuotas bebras; jis nepaleidineja konstruktoriaus, bet su destruktoriumi mirsta

// echo '<pre>';
// var_dump($bebras1);
// var_dump($bebras2);
// var_dump($bebras3);

echo $bebras1 -> tail; // dolerio zenklas nesideda, kartais dedam $, noredami susikurti kintamojo kintamaji
echo '<br>';

$bebras1 -> tail = 'Very long';
echo $bebras1 ->tail;
echo $bebras1 -> age; //fatal error, nes privati savybe


$bebras-> belenkas; //get metodas paima sita; jei nebutu get magic funkcijos, gautume error
$bebras1 -> whatIsYourAge();
$bebras1 ->changeAge(37);