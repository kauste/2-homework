<?php
// 1  uzdavinys
echo '<br>----------1-------------<br>';

$someText = 'Laba diena';
function h1text ($text, $h = 1){
    $textinH1 = "<h$h>$text</h$h>";
    return $textinH1;
}
$text1 = h1text ($someText);
echo $text1;

//2  uzdavinys
echo '<br>----------2-----------<br>';

$hValue = rand(1, 6);
function hAndText($text, $h){
    $textinH = h1text($text, $h);
    return $textinH .'<br>'. "h$h";
}
echo hAndText($someText, $hValue);

// 3  uzdavinys
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
echo '<br>----------4-------------<br>';
$anyNum = rand(0, 90001);

function dalikliai ($number){
    $sum = 0;
    for($i = 1; $i < $number; $i++){
        if($number % $i == 0){
            $sum++;
        }
    } return $sum;
}


echo dalikliai(3000);
echo '<br>';
echo dalikliai(90000);
echo '<br>';
echo dalikliai($anyNum);

// 4  uzdavinys priskiriu funkcija
echo '<br>----------4 priskiriu funkcija-------------<br>';
function dalikliai2 ($number){
    $sum = 0;
    for($i = 1; $i < $number; $i++){
        if($number % $i == 0){
            $sum++;
        }
    } echo $sum;
}

$priskirtiDalikliai = dalikliai2($anyNum);
echo '<br>';
echo $priskirtiDalikliai;

// 5  uzdavinys/*
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

?>