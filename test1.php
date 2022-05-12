<?php
$mouses = 0;
$circles = 0;
do {
    $mouse = rand(3, 5);
    $mouses += $mouse;
    $circles++;
} while ($mouses < 20);
echo $circles;
?>