<?php
// 1  uzdavinys
//Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
echo '<br>----------1-------------<br>';

$someText = 'Laba diena';
function h1text ($text, $h = 1){
    $textinH1 = "<h$h>$text</h$h>";
    return $textinH1;
}
$text1 = h1text ($someText);
echo $text1;

//2  uzdavinys
// Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
echo '<br>----------2-----------<br>';

$hValue = rand(1, 6);
function hAndText($text, $h){
    $textinH = h1text($text, $h);
    return $textinH .'<br>'. "h$h";
}
echo hAndText($someText, $hValue);

// 3  uzdavinys
//eneruokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();

echo '<br>----------3-------------<br>';

$randString = md5(time());

$rez = preg_replace_callback('/\d+/m', 'addHtag', $randString);

 function addHtag ($a){
    $forReturn =  h1text($a[0]);
    return "<div style='display: inline-block'>$forReturn</div>";
    
}

print_r($rez);

// pretty little game
echo '<br>----------pretty little game-------------<br>';

 $Rugile = md5('Labas, Rugile');

 $num = preg_replace_callback('/\D+/', 'makeItImpressive',  $Rugile);

 function makeItImpressive($rrr){
     $rar = $rrr[0];
   return "<div style='color:red; display:inline-block'>$rar</div>";
 }

echo $num;

// one more game
echo '<br>----------one more game-------------<br>';

$letsLearn = '1-1 Lababa -9 -7 oooo -77 777- mamamima';

$rez1 = preg_replace_callback('/(-)[0-9]+|\s/m', fn($a) =>
   "<button>$a[0]</button>"
, $letsLearn);

print_r($rez1);

// 4  uzdavinys
// Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;

echo '<br>----------4-------------<br>';
$anyNum = -10;

function dalikliai ($number){
    $sum = 0;
    for($i = 1; $i < abs($number); $i++){
        if( $number % $i == 0){ // reiketu rasyti '$number != 1 &&' bet nerasiau, kad galeciau perpanaudoti
            $sum++;
        }
    } return $sum;
}


echo dalikliai(3000);
echo '<br>';
echo dalikliai(90000);
echo '<br>';
if (is_int($anyNum)) {
    echo dalikliai($anyNum);
} else {
     echo 'iveskite sveika skaiciu';
}

// 4  uzdavinys priskiriu funkcija
echo '<br>----------4 priskiriu funkcija-------------<br>';
function dalikliai2 ($number){
    if(!is_int($number)){
        echo 'Ivestas ne sveikasis skaicius';
    } else {
        $sum = 0;
        for($i = 1; $i < $number; $i++){
            if($number % $i == 0){
                $sum++;
            }
        } echo $sum;
    }
    
}

$priskirtiDalikliai = dalikliai2($anyNum);
echo '<br>';
echo $priskirtiDalikliai;

// 5  uzdavinys
//Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.

echo '<br>----------5-------------<br>';

$array100 = [];
$dalikliuArray = [];
for ($i = 0; $i < 100; $i++){
    $array100[$i] = rand(33,77);
    echo "<br>$array100[$i]<br>";
    $dalikliuArray[$i] = dalikliai ($array100[$i]);
}
echo '<pre>';
print_r($array100);
print_r($dalikliuArray);

array_multisort($dalikliuArray, $array100);
print_r($array100);
print_r($dalikliuArray);

// 6  uzdavinys
//Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.

echo '<br>----------6-------------<br>';

$array6 = [];
$pirminiaiSkaiciai = [];
for ($i = 0; $i < 100; $i++){
    $atsitiktinis = rand(333, 777);
    $array6[$i] = $atsitiktinis;
    if(dalikliai ($array6[$i]) == 1) {
        $pirminiaiSkaiciai[] = $atsitiktinis;
    }
}
echo 'arejus6 <br>';
print_r($array6);
echo 'pirminiai skaiciai <br>';
print_r($pirminiaiSkaiciai);

// 7  uzdavinys
// Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;

echo '<br>----------7-------------<br>';

$long = rand(10, 20);
$depthCount = 0;
$depth = rand(10, 30);

function recursive($length, $deep, $depthCount){
    if($depthCount != ($deep - 1)){
        $array7 = [];
        $depthCount++;
        for($i = 0; $i < $length; $i++){
            if($i != ($length -1)) {
                $array7[] = rand(0, 10);
            } else {
                $array7[] = recursive($length, $deep, $depthCount);
            }
        }
    } elseif ($depthCount != $deep){
        $array7 = [];
        $depthCount++;
        for($i = 0; $i < $length; $i++){
            if($i != ($length -1)) {
                $array7[] = rand(0, 10);
            } else {
                $array7[] = 0;
            }
        }
    }
    return $array7;
}

$array7 = recursive($long, $depth, $depthCount);
print_r($array7);

// 8  uzdavinys
// Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.

echo '<br>----------8-------------<br>';

$sum7 = 0;
function sum ($array, &$sum){
    
    foreach ($array as $item){
        if(!is_array($item)){
            $sum += $item;
        } else {
            sum($item, $sum);
        }
    }
    return $sum;
}
$rezult = sum ($array7, $sum7);
echo $rezult;
echo '<br>';


// 8 uzdavinys kitaip
echo '<br>----------8 kitaip-------------<br>';

function sum2 ($array){
    $sum = 0;
    foreach ($array as $item){
        if(!is_array($item)){
            $sum += $item;
        } else {
            $sum += sum2($item);
        }
    }
    return $sum;
}
$rezult2 = sum2 ($array7);
echo $rezult2;

// 9 uzdavinys 
echo '<br>----------9-------------<br>';

$array9 = [];
for ($i = 0; $i < 3; $i++){
    $array9[] = rand(1, 33);
}

function primal (&$array){
    $arrayLength = count($array);
    $lastElement = $arrayLength - 1;
    for ($i = $lastElement; $i > $lastElement - 3; $i--){
        $countPrimals = 0;
        for ($i2 = 1; $i2 <= $array[$i]; $i2++){
            if ($array[$i] % $i2 == 0){
                $countPrimals++;
            }
            if ($countPrimals > 2){
                echo 'count Primals <br>';
                $array[] = rand(1, 33);
                primal ($array);
                return $array;
            }
        }
    }   
}

print_r(primal($array9));

// 10 uzdavinys kitaip
echo '<br>----------10-------------<br>';
$array10 = [];
 for($i = 0; $i < 10; $i++){
     $SecondLvl = [];
     for($i2 = 0; $i2 < 10; $i2++){
        $SecondLvl[] = rand(1, 100);
     }
     $array10[] = $SecondLvl;
 }
print_r($array10);

function sum10 ($array){
    $sumOfPrimals = 0;
    $amountOfPrimals = 0;
    foreach($array as $row){
        foreach($row as $item)
        if (dalikliai($item) <= 1){
            $sumOfPrimals += $item;
            $amountOfPrimals++;
        }
    }

    if ($sumOfPrimals / $amountOfPrimals < 70) {
        $minNum = 10000; 
        foreach ($array as $row){ //nesuveike
            if (min($row) < $minNum){
                $minNum = min($row);
            }
        }
       echo 'min Num'. $minNum . '<br>';
        foreach($array as $key => $row){
            if(in_array($minNum, $row)){
                $minElementKey = array_search($minNum, $row);
                $row[$minElementKey] += 3;
       //         echo $key . '<br>'. $minElementKey . '<br>' . 'reiksme'. $row[$minElementKey] . '<br>';
                sum10($array);
                break;
            }
        }

    } return $array;
    
}
echo 'Array su vidurkiu didesniu nei 70: <br>';
print_r(sum10($array10));


// PASKAITOS UZDAVINYS
/*echo '<br>----------PASKAITOS UZDAVINYS-------------<br>';
$sk = rand(100, 999);
echo 'skaicius:'. $sk;
echo '<br>';

$first = function ($a){
    return $a * 3;
};
$second = function ($a){
    return $a * 5;
};
$third = function ($a){
    return $a * 7;
};

$array = [];
array_push($array, $first, $second, $third);

foreach ($array as &$item){
    $item =  $item($sk);
}

print_r($array);*/
?>