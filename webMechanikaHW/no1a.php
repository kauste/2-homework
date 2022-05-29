<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body 
    <?php if(isset($_GET['color']) && $_GET['color'] == 1){
        ?>      style="background:red"
    <?php 
    }   else    
        ?>      style="background:black"
>
    <a style="color:white" href="https://localhost/bit/2-homework/webMechanikaHW/no1a.php">Black</a>
    <a style="color:white" href="https://localhost/bit/2-homework/webMechanikaHW/no1a.php?color=1">Red</a>
    

    
</body>
</html>
<!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->
