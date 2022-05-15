<?php
// 1 užduotis
$vardas = 'Brad';
$pavarde = 'Pitt';

if(strlen($vardas) > strlen($pavarde)){
    echo $vardas;
} elseif (strlen($pavarde) > strlen($vardas)){
    echo $pavarde;
} else echo 'Vardas ir pavarde vienodo ilgio';

echo '<br></br>';
// 2 uzduotis

echo strtoupper($vardas), ' ',  strtolower($pavarde);
echo '<br></br>';

// 3 uzduotis

$vardasPavarde = substr($vardas, 0, 1) . substr($pavarde, 0, 1);
$vardasPavarde2 = $vardas[0] . $pavarde[0];

echo $vardasPavarde;
echo '<br>';
echo $vardasPavarde2;
echo '<br></br>';

// 4 uzduotis

$paskutinesRaides = substr($vardas, -3, 3). substr($pavarde, -3, 3);
echo $paskutinesRaides;
echo '<br></br>';

// 5 uzduotis

$american = 'An American in Paris.';
$aReplace = str_replace('a', '*', $american);
$AReplace = str_replace('A', '*', $aReplace);
echo $AReplace;
echo '<br></br>';

// 6 uzduotis

$amountOfA = substr_count ($american, 'A');
$amountOfa = substr_count ($american, 'a');
echo $amountOfA + $amountOfa;
echo '<br></br>';

// 7 uzduotis
$tiffany = "Breakfast at Tiffany's";
$splace = '2001: A Space Odyssey';
$life =  "It's a Wonderful Life";

$deletevowels = array('A' => '', 'a' => '', 'E' => '', 'e' => '', 'I' => '', 'i' => '', 'O' => '', 'o' => '', 'U' => '', 'u' => '', 'Y' => '', 'y' => '');
$americanNoVowels = strtr($american, $deletevowels);
$tiffanyNoVowels = strtr($tiffany, $deletevowels);
$spaceNovowels = strtr($splace, $deletevowels);
$lifeNoVowels = strtr($life, $deletevowels);

echo $americanNoVowels, '<br>', $tiffanyNoVowels, '<br>', $spaceNovowels, '<br>', $lifeNoVowels, '<br>';

$americanNoVowels2 = metaphone($american);
echo strtolower($americanNoVowels2);
echo '<br></br>';

// 8 uzduotis

$starWars =  'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo ($starWars);
preg_match_all('/[1-9]{1}/i', $starWars, $matches, PREG_SET_ORDER);
echo '<br>';
print_r ($matches);





echo '<br></br>';

// 9 uzduotis

 function fiveAndLessLetters($movie){
    $movieArray = explode(' ', $movie);
    $movieArrayLength = count($movieArray);
    $numberOfShorterWords = 0;
        
    for ($i = 0; $i <  $movieArrayLength; $i++){
        $shorterWordLength = mb_strlen($movieArray[$i]);
        if ($shorterWordLength <= 5){
        $numberOfShorterWords++;
        } 
    }
    echo  $numberOfShorterWords;
 }
fiveAndLessLetters("Don't Be a Menace to South Central While Drinking Your Juice in the Hood");
echo '<br>';
fiveAndLessLetters("Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale");
echo '<br></br>';

// 10 uzduotis

$lettersLower = range('a', 'z');
$lettersUpper = range('A', 'Z');
$letters = array_merge($lettersLower, $lettersUpper);

$lastLetterPositiion = count($letters) - 1;
$aPosition = rand(0, $lastLetterPositiion);
$bPosition = rand(0, $lastLetterPositiion);
$cPosition = rand(0, $lastLetterPositiion);

echo $letters[$aPosition] . $letters[$bPosition] . $letters[$cPosition];
echo '<br></br>';

// 11 uzduotis

$movieEng = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$movieLt = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$movieEngArray = explode(' ', $movieEng);
$movieLtArray = explode(' ', $movieLt);
$moviesWordsArray = array_merge($movieEngArray, $movieLtArray);


$randomWords = '';
for ($i = 0; $i < 10; $i++){
    $LastWordInMovies = count($moviesWordsArray) - 1;
    $wordPosition = rand(0, $LastWordInMovies);
    $randomWords .= $moviesWordsArray[$wordPosition]. ' ';
    array_splice($moviesWordsArray, $wordPosition, 1);

}

echo $randomWords;

//11 antras variantas destytojo
?>