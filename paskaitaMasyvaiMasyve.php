<?php

$animals = [
['name' => 'Pilkis', 'type' => 'cat'],
['name' => 'Šarikas', 'type' => 'dog'],
['name' => 'Bobikas', 'type' => 'dog'],
['name' => 'Juodis', 'type' => 'cat'],
['name' => 'Pūkis', 'type' => 'dog']
];

foreach ($animals as $animal){
 if ('cat' == $animal['type']){
    echo '<br>';
    print_r($animal['name']);
 }

}
foreach ($animals as &$animal){
    if($animal['name'] == 'Pūkis'){;
        $animal['type'] == 'cat';
    }
}


echo '<br>';
echo '<pre>';
print_r($animals);
?>