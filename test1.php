<?php
$mouses = 0;
$circles = 0;
do {
    $mouse = rand(3, 5);
    $mouses += $mouse;
    $circles++;
} while ($mouses < 20);
echo $circles;

// Regex: o jeigu kvieciame regex funkcija, kad surastu stringe esanti funkcijos rezutata? Ieskoti rezultato
// o su unshit negalima ideti kinamojo su key pavadinimu?


?>