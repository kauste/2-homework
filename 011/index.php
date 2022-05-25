<?php

$cats = [
    'Pukis',
    'Murkis',
    'Pilkis',
    'Rainis',
];
for ($i = 0; $i < 20; $i++){
    $cats[] = $cats[$i];
}


$catsOut = json_encode($cats);
header('Content-Type: application/json;');

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

echo $catsOut;
