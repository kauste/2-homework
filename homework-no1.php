
<?php
// 1 užduotis
$name = 'Rugile';
$surname = 'Stasionyte';
$birthYear = 1900;
$currentYear = 3000;
$personAge = $currentYear - $birthYear;
echo "As esu $name $surname. Man yra $personAge metu/-ai. <br></br>";


// 2 užduotis

$x1 = rand(0, 4);
$x2 = rand(0, 4);
if($x1 > $x2 && $x2 !== 0) {
    $dalyba = $x1 / $x2;
    $res = round($dalyba, 2);
    echo "Pirma skaiciu $x1 padalinus is antro skaiciaus $x2 yra lygu $res <br></br>";
} elseif ($x1 > $x2 && $x2 === 0) {
    echo 'dalyba is nulio negalima <br></br>';
} elseif ($x2 > $x1 && $x1 !== 0) {
    $dalyba = ($x2 / $x1);
    $res = round($dalyba, 2);
    echo "Antra skaiciu $x2 padalinus is pirmo skaiciaus $x1 yra lygu $res <br></br>";
} elseif ($x2 > $x1 && $x2 === 0) {
    echo 'dalyba is nulio negalima <br></br>';
} else {
    echo 'Skaiciai lygus <br></br>';
}

// 3 uzduotis

$a1 = rand(0, 25);
$a2 = rand(0, 25);
$a3 = rand(0, 25);

if ($a1 > $a2 && $a1 < $a3 || $a1 < $a2 && $a1 > $a3) {
    echo $a1, '<br></br>';
} elseif ($a2 > $a1 && $a2 < $a3 || $a2 < $a1 && $a2 > $a3) {
    echo $a2, '<br></br>';
} elseif ($a3 > $a1 && $a3 < $a2 || $a3 < $a1 && $a3 > $a2) {
    echo $a3, '<br></br>';
} else 
    echo 'Tarp sugeneruotu skaitmenu yra lygiu <br></br>';

// 4 uzduotis

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);


if($a + $b > $c || $b + $c > $a || $a + $c > $b){
    echo 'Taip, kuo puikiausiai. <br></br>';
} else echo 'Ne, nebus trikampio. <br></br>';

// 5 uzduotis

$n1 = strval(rand(0, 2));
$n2 = strval(rand(0, 2));
$n3 = strval(rand(0, 2));
$n4 = strval(rand(0, 2));

$nAll = $n1 . $n2 . $n3 . $n4; 
echo $nAll, '<br></br>';
$nAmount0 = substr_count($nAll, 0);
$nAmount1 = substr_count($nAll, 1);
$nAmount2 = substr_count($nAll, 2);
echo 'skaiciaus 0 yra:', $nAmount0, '<br></br>', 'skaiciaus 1 yra:', $nAmount1, '<br></br>', 'skaiciaus 2 yra:', $nAmount2, '<br></br>';

// 6 uzduotis
$h = rand(1, 6);
echo "<h$h>$h</h$h>";

// 7 uzduotis

$color1 = rand(-10, 10);
$color2 = rand(-10, 10);
$color3 = rand(-10, 10);

if ($color1 < 0) {
    echo "<div style='color:green'>$color1</div>";
} elseif ($color1 === 0) {
    echo "<div style='color:red'>$color1</div>";
} elseif ($color1 > 0) {
    echo "<div style='color:blue'>$color1</div>";
}

if ($color2 < 0) {
    echo "<div style='color:green'>$color2</div>";
} elseif ($color2 === 0) {
    echo "<div style='color:red'>$color2</div>";
} elseif ($color2 > 0) {
    echo "<div style='color:blue'>$color2</div>";
} 

if($color3 < 0) {
    echo "<div style='color:green'>$color3</div><br></br>";
} elseif ($color3 === 0) {
    echo "<div style='color:red'>$color3</div><br></br>";
} elseif ($color3 > 0) {
    echo "<div style='color:blue'>$color3</div><br></br>";
}

// 8 uzduotis

$candlesAmount = rand(5, 3000);

if($candlesAmount <= 1000){
    echo 'Vienos zvakes kaina 1 eur<br></br>';
} elseif ($candlesAmount <= 2000){
    $kaina = 1 * (1 - 0.03);
    echo "Vienos zvakes kaina $kaina eur<br></br>";
} elseif ($candlesAmount <= 3000){
    $kaina = 1 * (1 - 0.04);
    echo "Vienos zvakes kaina $kaina eur<br></br>";
}

// 9 uzduotis

$o1 = rand(0, 100);
$o2 = rand(0, 100);
$o3 = rand(0, 100);

$sum = $o1 + $o2 + $o3;
$amountOfVariables = 3;
$roundMean = round($sum/$amountOfVariables);
echo "$roundMean <br>";

if ($o1 < 10 || $o1 > 90) {
    $sum -= $o1;
    $amountOfVariables -= 1;
} 
if ($o2 < 10 || $o2 > 90) {
    $sum -= $o2;
    $amountOfVariables -= 1;
}
if ($o3 < 10 || $o3 > 90) {
    $sum -= $o3;
    $amountOfVariables -= 1;
}
if ($amountOfVariables === 0) {
    echo 'visi kintamieji yra mažesni uz 0 arba didesni uz 90 <br></br> ';
} else {
    $roundMean2 = round($sum/$amountOfVariables);
    echo "$roundMean2 <br></br>";
}

// 10 uzduotis

$val = rand(0, 23);
$min = rand(0, 59);
$sec = rand(0, 59);
$secPlus = 300;
echo "$val:$min:$sec <br>";

$timeInSec = $val * 3600 + $min * 60 +$sec;
$timeInSecPlus = $timeInSec + $secPlus;

$valPlus = floor($timeInSecPlus / 3600);
$minPlus = floor(($timeInSecPlus - ($valPlus * 3600))/60);
$secPlus = $timeInSecPlus - $valPlus * 3600 - $minPlus * 60;

if ($valPlus > 23) {
    $valPlus %= 24;
}

echo "$valPlus:$minPlus:$secPlus <br></br>";

// 11 uzduotis

$r1 = rand(1000, 9999);
$r2 = rand(1000, 9999);
$r3 = rand(1000, 9999);
$r4 = rand(1000, 9999);
$r5 = rand(1000, 9999);
$r6 = rand(1000, 9999);

$f6 = max($r1, $r2, $r3, $r4, $r5, $r6);
$f1 = min($r1, $r2, $r3, $r4, $r5, $r6);

$f6replaced = str_replace("$f6 ", '', "$r1 $r2 $r3 $r4 $r5 $r6 ");
$f1replaced = str_replace("$f1 ", '', $f6replaced);

$n1string = substr($f1replaced, -5, 4);
$n1int = intval($n1string);
$n2string = substr($f1replaced, -10, 4);
$n2int = intval($n2string);
$n3string = substr($f1replaced, -15, 4);
$n3int = intval($n3string);
$n4string = substr($f1replaced, -20, 4);
$n4int = intval($n4string);

$f5 = max ($n1int, $n2int, $n3int, $n4int);
$f2 = min ($n1int, $n2int, $n3int, $n4int);

$f5replaced = str_replace("$f5 ", '', "$n1int $n2int $n3int $n4int ");
$f2replaced = str_replace("$f2 ", '', $f5replaced);

$m1string = substr($f2replaced, -5, 4);
$m1int = intval($m1string);
$m2string = substr($f2replaced, -10, 4);
$m2int = intval($m2string);

$f4 = max($m1int, $m2int);
$f3 = min($m1int, $m2int);

echo "$f1, $f2, $f3, $f4, $f5, $f6";






?>