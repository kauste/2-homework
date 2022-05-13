<?php
// 1 uždavinys
echo '<br>------------1-------------<br>';
$array1 = [];
for($i = 0; $i < 10; $i++){
    $row = [];
    for($i2 = 0; $i2 < 5; $i2++){
        $row[] = rand(5, 25);
    }
    $array1[] = $row;
}


print_r($array1);

// 2 uždavinys a
echo '<br>------------2a-------------<br>';

$biggerThanTen = 0;
foreach($array1 as $row){
    foreach($row as $element){
        if($element > 10){
            $biggerThanTen++;
        }
    }
}
echo "Didesniu nei 10 reiksmiu yra $biggerThanTen";

// 2 uždavinys b
echo '<br>------------2b-------------<br>';

$bigNum = 4;
foreach($array1 as $row){
    foreach($row as $element){
        if($element > $bigNum){
            $bigNum = $element;
        }
    }
}
echo "Didziausias skaicius yra $bigNum";

// 2 uždavinys c kitaip
echo '<br>------------2c kitaip-------------<br>';

$no0sum = 0;
$no1sum = 0;
$no2sum = 0;
$no3sum = 0;
$no4sum = 0;
foreach($array1 as $row) {
    foreach($row as $key => $element){
        if($key = 0){
            $no0sum++;
        } elseif($key = 1){
            $no1sum++;
        } elseif($key = 2){
            $no2um++;
        } elseif($key = 3){
            $no3sum++;
        } elseif($key = 4){
            $no4sum++;
        }
    }
}
echo "Pirmo elemento suma $no0sum. Pirmo elemento suma $no1sum. Pirmo elemento suma $no2sum. Pirmo elemento suma $no3sum. Pirmo elemento suma $no4sum. <br>";

// 2 uždavinys c kitaip
echo '<br>------------2c kitaip-------------<br>';
foreach($array1 as $row){
    $numberOfElements = 0;
    $whitchElement = 0;
    foreach($row as $element){
        $whitchElement++;
        if($numberOfElements < $whitchElement){
            $numberOfElements = $whitchElement;
        }
    }
}

$sum = [];
for($i = 0; $i < $numberOfElements; $i++){
    $column = array_column($array1, "$i" );
    $sum[$i] = array_sum($column);
    $column = 0;
}
echo '<pre>';
print_r($sum);

// 2 uždavinys c kitaip
echo '<br>------------2c kitaip dar kitaip-------------<br>';
$secondLvlIndexes =[];

foreach($array1 as $row){
    foreach($row as $key => $element){
        if (!in_array($key, $secondLvlIndexes)){
            $secondLvlIndexes[$key] = 0;
        }
    }
}

foreach($array1 as $key1 => $row){
    foreach($row as $key2 => $element){
         $secondLvlIndexes[$key2] += $element;
    }
}
$secondLvlIndexes = array('Indeksas' => 'Suma') + $secondLvlIndexes;
echo '<pre>';
print_r($secondLvlIndexes);


// 2 uzdavinys d
echo '<br>------------2d-------------<br>';
$array1[] = [];
$array1[] = [];
foreach($array1 as &$row1){ //$array1 as $key => $row
   $row1[] = rand(5, 25); //$array1[$key] = rand(5, 25);
   $row1[] = rand(5, 25); //$array1[$key] = rand(5, 25);
}

echo '<pre>';
print_r($array1);
unset($row1);

$arrayOfSums =[];
foreach($array1 as $row){
    $sum = 0;
    foreach($row as $element){
        $sum += $element;
    }
    $arrayOfSums[] = $sum;
}

echo '<pre>';
print_r($arrayOfSums);

// 3 uzdavinys 
echo '<br>------------3-------------<br>';
$letters = range('A','Z');
$lettersLength = count($letters);
$lastLetter = $lettersLength - 1;
$array2 = [];
for($i = 0; $i < 10; $i++){
    $row2 = [];
    $amount = rand(2, 20);
    for($i2 = 0; $i2 < $amount; $i2++){
        $row2[] = $letters[rand(0, $lastLetter)];
    }
    $array2[] = $row2;
}

foreach($array2 as &$row2){
    sort($row2);
}

echo '<pre>';
print_r($array2);
unset($row2);

// 4 uzdavinys
echo '<br>------------4-------------<br>';

$sums = [];
foreach ($array2 as $key => $row2){
    $elementSum = 0;
    $elementSum = count($row2);
    $sums[$key] = $elementSum;
}

$array2length = count($array2);
for($i = 0; $i < $array2length; $i++){
    for($j = $i + 1; $j < $array2length; $j++){
        if($sums[$i] > $sums[$j]){
            $temp = $array2[$i];
            $array2[$i] = $array2[$j];
            $array2[$j] = $temp;

            $temp = $sums[$i];
            $sums[$i] = $sums[$j];
            $sums[$j] = $temp;
        }
        if(!in_array('K', $array2[$i]) && in_array('K', $array2[$j])){
            $temp = $array2[$j];
            $array2[$j] = $array2[$i];
            $array2[$i] = $temp;

            $temp = $sums[$j];
            $sums[$j] = $sums[$i];
            $sums[$i] = $temp;
        }
    }
}

echo '<pre>';
print_r($array2);

// 5 uzdavinys
echo '<br>------------5-------------<br>';
$array3 = [];
for($i = 0; $i < 30; $i++){
    do {
        $isInArray3 = false;
        $user_id = rand (1, 1000000);
        if (in_array($user_id, $array3)){
            $isInArray3 = true;
        }
    } while($isInArray3);
    $place_in_row = rand(0, 100);
    $array3[] = ['User ID' => $user_id, 'Place in row' => $place_in_row];
}

print_r($array3);

// 5 uzdavinys kitas variantas
echo '<br>------------5 kitas variantas-------------<br>';
$array3b = [];
for($i = 0; $i < 30; $i++){
    do {
        $isInArray3b = false;
        $user_id = rand (1, 1000000);
        foreach($array3b as $key => $row3b){
            if($row3b['User ID'] == $user_id)
            $isInArray3b = true;
        }
    } while($isInArray3b);
    $place_in_row = rand(0, 100);
    $array3b[] = ['User ID' => $user_id, 'Place in row' => $place_in_row];
}

print_r($array3b);

// 6 uzdavinys
echo '<br>------------6-------------<br>';

foreach($array3 as $row3){  
   sort($array3, $row3['User ID']);
}
print_r($array3);

$placeInRowArray = array_column($array3, 'Place in row');
array_multisort($placeInRowArray, SORT_NUMERIC, $array3);
 print_r($array3);

 // 6 uzdavinys
echo '<br>------------6 kitaip-------------<br>';

$placeInRowArray = [];
foreach ($array3b as $key => $row){
    $placeInRowArray[]= $array3b[$key]['User ID']; // $row['Place in row'];
}
for ($i = 0; $i < count($placeInRowArray); $i++){
    for($j = $i + 1; $j < count($placeInRowArray); $j++){
        if($placeInRowArray[$i] > $placeInRowArray[$j]){
            $temp = $placeInRowArray[$i];
            $placeInRowArray[$i] = $placeInRowArray[$j];
            $placeInRowArray[$j] = $temp;
        }
    }
}

    for ($i = 0; $i < count($placeInRowArray); $i++){
        foreach($array3b as $key => &$row){
            if ($placeInRowArray[$i] == $array3b[$key]['User ID']){
                $temp = $array3b[$i];
                $array3b[$i] = $row;
                $row = $temp;
            }
        }
    }
print_r($array3b);


$placeInRowArray = [];
foreach ($array3b as $key => $row){
    $placeInRowArray[]= $array3b[$key]['Place in row']; // $row['Place in row'];
}
for ($i = 0; $i < count($placeInRowArray); $i++){
    for($j = $i + 1; $j < count($placeInRowArray); $j++){
        if($placeInRowArray[$i] > $placeInRowArray[$j]){
            $temp = $placeInRowArray[$i];
            $placeInRowArray[$i] = $placeInRowArray[$j];
            $placeInRowArray[$j] = $temp;
        }
    }
}

    for ($i = 0; $i < count($placeInRowArray); $i++){
        foreach($array3b as $key => &$row){
            if ($placeInRowArray[$i] == $array3b[$key]['Place in row']){
                $temp = $array3b[$i];
                $array3b[$i] = $row;
                $row = $temp;
            }
        }
    }
print_r($array3b);

 // 7 uzdavinys
 echo '<br>------------7 kitaip-------------<br>';
 
?>