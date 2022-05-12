<?php
// 1 uzduotis
echo '<br>------1-------<br>';
$array = [];
foreach(range(0, 29) as $value){
    $array[$value] = rand(5, 25);
}
echo '<pre>';
print_r($array);

// 1 uzduotis kitas varianras
echo '<br>------1 version 2-------<br>';
$array2 = [];
for($i = 0; $i < 30; $i++){
    $array2[$i] = rand(5,25);
}
echo '<pre>';
print_r($array2);

// 2 uzduotis a
echo '<br>------2a-------<br>';
$biggerThan10 = 0;
foreach($array as $value){
    if($value > 10){
        $biggerThan10++;
    }
}
echo "Masyve yra $biggerThan10 reiksmes didesnes uz 10 <br>";

// 2 uzduotis b
echo '<br>------2b-------<br>';
$bigNum = 0;
$index = '';
foreach ($array as $key => $value){
    if($value > $bigNum){
        $bigNum = $value;
        $inex = '';
    }
    if($value == $bigNum){
        $index .= $key;
    }
}
echo "Didziausias skaicius yra $bigNum; Ju masyve yra indeksai $index";

// 2 uzduotis c
echo '<br>------2c-------<br>';
$evenSum = 0;
for($i = 0; $i < count($array); $i += 2){
     $evenSum +=  $array[$i];
}
echo $evenSum. '<br>';

// 2 uzduotis d
echo '<br>------2d-------<br>';

$newArray = [];
foreach($array as $key => $value){
    $newArray[] =  $value -$key;
}

echo '<pre>';
print_r($newArray);

// 2 uzduotis e
echo '<br>------2e-------<br>';

foreach(range(0, 9) as $value) {
    $array[] = rand(2, 25);
}
echo '<pre>';
print_r($array);

// 2 uzduotis f
echo '<br>------2f-------<br>';

$evenArray = [];
$oddArray = [];
foreach($array as $key => $value){
    if($key % 2 == 0){
        $evenArray[] = $value;
    } else {
        $oddArray[] = $value;
    }
}

echo '<pre>';
print_r($evenArray);
echo '<pre>';
print_r($oddArray);

// 2 uzduotis g
echo '<br>------2g-------<br>';

foreach($array as $key => &$value){
    if($key % 2 == 0 && $value > 15){
        $value = 0;
    }
}

echo '<pre>';
print_r($array);
unset($value);
// 2 uzduotis h
echo '<br>------2h-------<br>';
$moreThanTen =[];
foreach($array as $key => $value){
    if ($value > 10) {
        echo $key;
        break;
    }
}
// 2 uzduotis i /da vienas variantas gal butu
echo '<br>------2i-------<br>';

foreach($array as $key => $value){
    if ($key % 2 === 0){
        unset($array[$key]);
    }
}

echo '<pre>';
print_r($array);

// 3 uzduotis 
echo '<br>------3-------<br>';

$letters = range('A', 'D');
$lettersAmount = count($letters);
$randLetters = [];

for ($i = 0; $i < 200; $i++){
    $letterIndex = rand(0, ($lettersAmount - 1));
    $randLetters[] = $letters[$letterIndex];
}

echo '<pre>';
print_r($randLetters);

// 4 uzduotis 
echo '<br>------4-------<br>';

sort($randLetters);
echo '<pre>';
var_dump($randLetters);

// 5 uzduotis 
echo '<br>------5-------<br>';

$letters = range('A', 'D');
$lettersAmount = count($letters);

$randLetters1 = [];
for ($i = 0; $i < 200; $i++){
    $letterIndex = rand(0, ($lettersAmount - 1));
    $randLetters1[] = $letters[$letterIndex];
}

$randLetters2 = [];
for ($i = 0; $i < 200; $i++){
    $letterIndex = rand(0, ($lettersAmount - 1));
    $randLetters2[] = $letters[$letterIndex];
}

$randLetters3 = [];
for ($i = 0; $i < 200; $i++){
    $letterIndex = rand(0, ($lettersAmount - 1));
    $randLetters3[] = $letters[$letterIndex];
}

$threeLetters = [];
for ($i = 0; $i < count($randLetters1); $i++){
    $threeLetters [] = $randLetters1[$i] . $randLetters2[$i] . $randLetters3[$i];
}

sort($threeLetters);
echo '<pre>';
print_r($threeLetters);

$lastValueIndex = count($threeLetters) -1;
$uniqueCombos = 0;
$uniqueValues = 0;
foreach ($threeLetters as $key => $value){
    if ($key == 0 && $value != $threeLetters[$key + 1]) {
        $uniqueValues++;
    } elseif ($key == $lastValueIndex && $value != $threeLetters[$key - 1]){
        $uniqueValues++;
    } elseif ($key != 0 && $key != $lastValueIndex && $value != $threeLetters[$key + 1] && $value != $threeLetters[$key - 1]){
        $uniqueValues++;
    }

    if ($key == $lastValueIndex && $value != $threeLetters[$key - 1]){
        $uniqueCombos++;
    } elseif ($key != $lastValueIndex && $value != $threeLetters[$key + 1]){
        $uniqueCombos++;
    } 
}
echo $uniqueValues. '<br>';
echo $uniqueCombos. '<br>';

/* foreach ($randLetters1 as $key => &$value){
    $value = $value . $randLetters2[$key] . $randLetters3[$key] ;
} */

// 6 uzduotis 
echo '<br>------6-------<br>';

$arrayNo1 = [];
$arrayNo2 = [];

do{
    $randForNo1 = rand(100, 999);
    if(!in_array($randForNo1, $arrayNo1)){
        $arrayNo1[] = $randForNo1;
    }
}while (count($arrayNo1) !== 100);

do{
    $randForNo2 = rand(100, 999);
    if(!in_array($randForNo2, $arrayNo2)){
        $arrayNo2[] = $randForNo2;
    }
}while (count($arrayNo2) !== 100);

echo '<pre>';
print_r($arrayNo1);
echo '<pre>';
print_r($arrayNo2);

// 7 uzduotis 
echo '<br>------7-------<br>';

$arrayInNo1Only = [];

foreach($arrayNo1 as $value) {
    if (!in_array($value, $arrayNo2)){
        $arrayInNo1Only[] = $value;
    }
}
echo '<pre>';
print_r($arrayInNo1Only);

// 8 uzduotis 
echo '<br>------8-------<br>';
$arrayInNo1AndNo1 = [];

foreach($arrayNo1 as $value) {
    if (in_array($value, $arrayNo2)){
        $arrayInNo1AndNo1[] = $value;
    }
}
echo '<pre>';
print_r($arrayInNo1AndNo1);

// 9 uzduotis 
echo '<br>------9-------<br>';

$combinedNo1No2 = array_combine($arrayNo1, $arrayNo2);
echo '<pre>';
print_r($combinedNo1No2);

// 10 uzduotis 
echo '<br>------10-------<br>';

$tenNumbersArray = [rand(5, 25), rand(5, 25)];
$saugiklis = 100;
do {
    if(!($saugiklis--)){
        echo 'saugiklis';
        break;
    }
    $length = count($tenNumbersArray);
    $lastElement = $length -1;  
    $tenNumbersArray[] = $tenNumbersArray[$lastElement] + $tenNumbersArray[$lastElement - 1];
} while ($length != 10);
echo '<pre>';
print_r($tenNumbersArray);

// 11 uzduotis 
echo '<br>------11-------<br>';

$array101 = [];
do {
    $array101[] = rand(0, 300);
} while (count($array101) !== 101);

sort($array101);
$lastValueIndex = count($array101) - 1;
do {
    $isChanged = false;
    foreach($array101 as $key => &$value){
        if ($key != 0 && $value == $array101[$key - 1]) {
            $value = rand(0, 300);
            $isChanged = true;
        }
    }
} while (!$isChanged);

shuffle($array101);

$maxValue = max($array101);
$maxKey = array_search($maxValue, $array101);
unset($array101[$maxKey]);

$middleElementIndex = $lastValueIndex / 2;
$middleIndexValue = $array101[$middleElementIndex];
unset($array101[$middleElementIndex]);

$array101[$middleElementIndex] = $maxValue;
$array101[$maxKey] = $middleIndexValue;
ksort($array101);


$array101 = array_chunk($array101, 51);
$array101[0] = array_chunk($array101[0], 50);
$array101 = [...$array101[0], $array101[1]];

$lastArray101Index = count($array101) - 1;
$firstHalfSum = array_sum($array101[0]);
$secoundtHalfSum = array_sum($array101[$lastArray101Index]);


asort($array101[0]);
arsort($array101[$lastArray101Index]);
$array101 = [...$array101[0], ...$array101[1], ...$array101[$lastArray101Index]];

echo '<pre>';
print_r($array101);
echo '<br>' ;
echo "Pirmos dalies suma $firstHalfSum";
echo '<br>' ;
echo "Antros dalies suma $secoundtHalfSum";

?>