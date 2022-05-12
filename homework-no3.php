
<?php
// 1 uzduotis a)
echo '---1a----<br>';
for($i = 0; $i < 400; $i++){
    echo '<div style="display:inline-block">*</div>';
}
// 1 uzduotis b)
echo '<br>---1b----<br>';
for ($i = 0; $i < (400/50); $i++){
    echo '<div style="display:block">';
    for($i1 = 0; $i1 < 50; $i1++){
        echo '<div style="display:inline-block">*</div>';
    }
    echo '</div>';
}

// 2 uzduotis
echo '---2---<br>';
$moreThan150 = 0;
for ($i = 0; $i < 300; $i++){
    $number = rand(0, 300). ' ';
    if ($number > 150){
        $moreThan150++;
    }
    if ($number > 275){
        $number = "<div style='color:red; display:inline-block'>$number</div>". ' ';
    }
    echo $number;
}
    echo "<br> Is viso $moreThan150 skaiciai, kurie yra didesni nei 150";

// 3 uzduotis
echo '<br>---3---<br>';

$n = rand(3000, 4000);
$numbers = '';
for ($i = 1; $i < $n; $i++){
    if($i % 77 == 0) {
        $numbers .= $i. ', ';
    }
}

$numbers = substr_replace($numbers, ' ', -2);
echo $numbers;

// 4 uzduotis 5 uzd
echo '<br>---4 and 5---<br>';
echo '<div style="width: 500px; height: 500px">';
 for ($i = 0; $i < 25; $i++){
     echo '<div style="display:flex; justify-content:space-between;">';
     for ($i2 = 0; $i2 < 25; $i2++){
         if($i2 == $i || $i2 == 24 - $i){
            echo '<div style="display:inline-block; color:red">*</div>';
         } else {
            echo '<div style="display:inline-block;">*</div>';
         }
     }
     echo '</div>';
 }
 echo '</div>';
 // 6 uzduotis a
 echo '---6a---<br>';
 $herbas = 0;
 $skaicius = 1;
 $saugiklis = 100;
 do {
     if(!($saugiklis--)){
         echo 'saugiklis';
         break;
     }

    $metimas = rand($herbas, $skaicius);
    if($metimas == $herbas){
        echo 'H';
    } else {
        echo 'S' ;
    }

 } while ($metimas != $herbas);


// 6 uzduotis b
echo '<br>---6b---<br>';

$saugiklis = 100;
$atsiverte = '';
do {
   if(!($saugiklis--)){
       echo 'saugiklis';
       break;
   }
   
  $metimas = rand($herbas, $skaicius);
  if($metimas == $herbas){
       echo 'H';
       $atsiverte .= 'H';
   } else {
       echo 'S' ;
   }
} while ($atsiverte != 'HHH');

 // 6 uzduotis c
 echo '<br>---6c---<br>';

 $saugiklis = 100;
 $atsiverte = '';
 do {
    if(!($saugiklis--)){
        echo 'saugiklis';
        break;
    }
    
   $metimas = rand($herbas, $skaicius);
   if($metimas == $herbas){
        echo 'H';
        $atsiverte .= 'H';
    } else {
        echo 'S' ;
        $atsiverte = '';
    }
} while ($atsiverte != 'HHH');

 // 7 uzduotis
 echo '<br>---7---<br>';

 $petroTaskuSuma = 0;
 $kazioTaskuSuma = 0;
 $saugiklis = 100;
do {
    if (!($saugiklis--)){
        echo 'saugiklis';
        break;
    }

    $petras = rand(10, 20);
    $kazys = rand(5, 25);
    echo "Petras: $petras, Kazys: $kazys. ";
    if($petras > $kazys){
        echo 'Partija laimejo Petras. <br>';
    } elseif ($kazys > $petras){
        echo 'Partija laimejo Kazys. <br>';
    } else echo 'Lygiosios. <br>';

    $petroTaskuSuma += $petras;
    $kazioTaskuSuma += $kazys;
    
} while ($petroTaskuSuma < 222 && $kazioTaskuSuma <222);

echo "Petro tasku suma: $petroTaskuSuma, Kazio tasku suma: $kazioTaskuSuma. ";
if($petroTaskuSuma > $kazioTaskuSuma){
    echo 'Zaidima laimejo Petras.';
} elseif ($kazioTaskuSuma > $petroTaskuSuma) {
    echo 'Zaidima laimejo Kazys.';
} else echo 'Lygiosios.';

 // 8 uzduotis
 echo '<br>---8---<br>';
 $iBack = 0;
 echo '<div style:"width: 300px; height: 300px;">';
 for($i = 0; $i < 25; $i++){
     if ($i < 13) {
        $amoutOfStars = $i + ($i + 1);
     } else {
         $amoutOfStars = (2 * $i) - 3 - ($iBack * 4); 
         $iBack++;
     }   
echo '<div style="display:flex; justify-content:center; width: 330px">';
     for ($a = 0; $a < $amoutOfStars; $a++){
         $red = rand(0, 225);
         $green = rand(0, 225);
         $blue = rand(0, 225);
        echo "<div style='display:inline-block; letter-spacing: 5px; color: rgb($red, $green, $blue)'>*</div>";
     }
     echo '</div>';
 }
 echo '</div>';

 // 9 uzduotis
 echo '<br>---9---<br>';
 
// 10 a uzduotis
echo '<br>---10a---<br>';
$smugiuKiekis = 0; 
for ($i = 0; $i < 5; $i++) {
    $ikaltaMilimetrais = 0;
    $saugiklis = 100;
    do {
        if(!($saugiklis--)){
            echo 'saugiklis';
            break;
        }
        $smugis = rand(5, 20);
        $smugiuKiekis++;
        $ikaltaMilimetrais += $smugis;
    } while ($ikaltaMilimetrais < 85);
}
echo $smugiuKiekis;

// 10 b uzduotis
echo '<br>---10b---<br>';

$smugiuKiekis = 0;

for ($i = 0; $i < 5; $i++) {
    $ikaltaMilimetrais = 0;
    $saugiklis = 100;
    do {
        if(!($saugiklis--)){
            echo 'saugiklis <br>';
            break;
        }

        $arPataike = rand(0, 1);
        $smugiuKiekis++;

        if($arPataike){
            $smugis = rand(20, 30);
            $ikaltaMilimetrais += $smugis;
        } else continue;

    } while ($ikaltaMilimetrais < 85);
}
  echo $smugiuKiekis;

// 11 uzduotis
echo '<br>---11---<br>';

$allNumbers = '';
$amountOfNumbers = 0;
while ($amountOfNumbers != 50){
    $number = rand(1, 200);
    if (!str_contains($allNumbers, $number)){
        $numberAndSpace = "$number ";
        $allNumbers .= $numberAndSpace;
        $amountOfNumbers++;
    } else continue;
}
$allNumbers = substr_replace($allNumbers, '', -1);
echo 'Visi atsitiktiniai, nesikartojantys skaiciai:'. $allNumbers. '<br>';

$allNumbersArray = explode(' ', $allNumbers);
$primeNumbers = '';
foreach ($allNumbersArray as $value){
    $dalinasiIs = 0;
    for ($i = 1; $i < 200; $i++){
        if ($value % $i === 0){
            $dalinasiIs++;
        }
        if($value == $i){
            break;
        }
        if($dalinasiIs >= 3){
            break;
        }
    } 
    if ($dalinasiIs == 2){
        $primeNumbers .= "$value ";
    }
}
$primeNumbers = substr_replace($primeNumbers, '', -1);
$primeNumbersArray = explode(' ', $primeNumbers);
sort($primeNumbersArray);
$sortedPrimeString = implode(', ', $primeNumbersArray);
echo "<br> Pirminiai isrusiuoti skaiciai: $sortedPrimeString" ;

?>


